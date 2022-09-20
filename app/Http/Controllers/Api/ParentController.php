<?php

namespace App\Http\Controllers\Api;

use Exception;
// use App\helpers\Qs;
// use App\Models\Parent as StudentsParent;
use Carbon\Carbon;
use App\helpers\Qs;
use App\Models\User;
use App\Models\Eleve;
use App\Models\Absence;
use App\Models\Matiere;
use App\Models\Periode;
use App\Models\Enseigner;
use App\Models\AnneeScolaire;
use App\Models\ClassePrimaire;
use App\Models\ClasseSecondaire;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ParentController extends Controller
{
     // Get all parents
     public function getAllParents()
     {
         try {
             // get all records
             $parents = DB::table('parents')->join('avoir_profils','users.id','=','avoir_profils.user_id')
                        ->join('profils','avoir_profils.profil_id','=','profils.id')
                        ->where('profils.lib_profil','parent')
                        ->select('users.*','avoir_profils.*','profils.*')
                        ->get();
             // visualize response
             return response()->json([
                 'success' => true,
                 'total_count' => count($parents),
                 'total_gender_girl' => count($parents->where('genre','Féminin')),
                 'total_gender_boy' => count($parents->where('genre','Masculin')),
                 'parents' => $parents,
             ]);
         } catch (Exception $exc) {
             // visualize error
             return response()->json([
                 'success' => false,
                 'message' => $exc->getMessage(),
             ]);
         }
             
     }

         // Get parent by student
    public function getParentByStudentMatricule($student_mat)
    {
        try {
            // get concerned records
            $student = StudentRecord::join('users', 'users.id', '=', 'student_records.user_id')
                ->where('student_records.id', $student_id)
                ->first();
            $parent = User::join('student_records', 'student_records.my_parent_id', '=', 'users.id')
                ->where([['users.user_type', 'parent'], ['student_records.id', $student_id]])
                ->select('users.*')
                ->first();
            // visualize response
            return response()->json([
                'success' => true,
                'student' => $student, //->name . ' ' . $student->lastname,
                'parent' => $parent,
            ]);
        } catch (Exception $exc) {
            // visualize error
            return response()->json([
                'success' => false,
                'message' => $exc->getMessage(),
            ]);
        }
    }

    // function my children 
    public function getMyChildren(int $parent_id, int $year_id)
    {
        try {
           
            // get parent by id
            $parent = DB::table('parents')->join('users', 'users.id', '=','parents.user_id')
                    ->where('parents.id',$parent_id)
                    ->select(
                        'parents.id as parentID'
                    )->get();
            $annee_scolaire = AnneeScolaire::where('id',$year_id)->first();
            if($annee_scolaire ==null){
                return response()->json([
                    'success'=>false,
                    'error'=>'SERVER ERROR',
                    'message'=>'year not found'
                ]);
            }
                    // get children by parent id 
                $children = Eleve::join('users','users.id','=','eleves.user_id')
                    ->join('parenters','parenters.eleve_id','=','eleves.id')
                    ->join('parents','parents.id','=','parenters.parent_id')
                    ->join('inscrires as ins','ins.eleve_id','=','eleves.id')
                    ->join('classes','classes.id','=','ins.classe_id')
                    ->join('annee_scolaires as ansco','ansco.id','=','ins.annee_scolaire_id')
                    ->join('niveaux', 'niveaux.id', '=', 'classes.niveau_id')
                    ->join('cycles','cycles.id','=','niveaux.cycle_id')
                    ->where([
                            'parents.id'=>$parent_id,
                            'ansco.id' => $year_id
                        ])
                    ->select(  
                        'eleves.id as student_id',
                        'eleves.matricule as matricule',
                        'eleves.statut_eleve as statut',
                        'users.nom as nom',
                        'users.prenom as prenom',
                        'users.genre as genre',
                        'cycles.libelle_cycle as cycle',
                        'classes.niveau_id as id_class_level',
                        'niveaux.libelle_niveau as level',
                        'classes.id as id_classe',
                        'classes.libelle_classe as classe'
                        
                    )
                    ->get();
                        // dd($children);
                    $nbr_children = count($children);

                    // for each children 
                    foreach ($children as $child) {
                        
                        
                    // schooling payment
                    $scolarite_infos = Qs::getScolariteInfo($child,$year_id);
                    // dd($scolarite_infos);
                    $child['scolarite'] = $scolarite_infos;
                        // time table
                        $timeTable = Qs::getTimetableByClass($child->id_classe);
                        $child['timeTable'] = $timeTable;
                       // get all child subject by class level
                       $subjects = Matiere::join('est_enseigners as ee','ee.matiere_id','=','matieres.id')
                        ->join('niveaux','niveaux.id','=','ee.niveau_id')
                        ->join('classes','classes.niveau_id','=','niveaux.id')       
                        ->where(
                                'classes.id',$child->id_classe
                            )
                        ->select(
                                'matieres.id as id_subject',
                                'matieres.nom_matiere as subject'

                            )
                        ->groupBy(
                                'matieres.id',
                                'matieres.nom_matiere'
                            )
                        ->get();
                        // dd($subjects);
                        $child['total_count_subject'] = count($subjects);
                        // $child['timeTable'] 
                        $child['subjects']=$subjects;
                        // dd($child['subjects']);
                        // dd($subjects);
                        foreach($child['subjects'] as $subject){
                            // 
                            // dd($subject->id_subject);
                            // dd($cls->id);
                            $abs = Qs::getAbsencesByStudent($child->student_id,$subject->id_subject);
                            $subject['absences'] = $abs;
                            $cls = ClasseSecondaire::where('classe_id',$child->id_classe)->first();
                            $clp = ClassePrimaire::where('classe_id',$child->id_classe)->first();
                            if($cls !=  NULL || $cls != false) {
                                $teacherName = Enseigner::join('matieres','enseigners.matiere_id','=','matieres.id')
                                ->join('classe_secondaires as sc','sc.id','=','enseigners.classe_secondaire_id')
                                ->join('classes','classes.id','=','sc.classe_id')
                                ->join('enseignants','enseignants.id','=','enseigners.enseignant_id')
                                ->join('users','users.id','=','enseignants.user_id')
                                ->where([
                                        'matieres.id'=>$subject->id_subject,
                                        'sc.id'=>$cls->id
                                    ])
                                ->select(
                                        'users.id as teacherID',
                                        'enseignants.matricule as teacherMat',
                                        'users.nom as teacherFirstName',
                                        'users.prenom as teacherName',
                                        'users.email as teacherEmail',
                                        'users.genre as teacherGender',
                                        'users.photo as teacherPicture',
                                        'users.adresse as teacherAddress',
                                        'users.telephone1 as teacherPhone1',
                                        'users.telephone2 as teacherPhone2'        
                                )
                                ->first(); 
                                // dd($teacherName);
                            }else {
                                $teacherName = $clp->instituteur->user;
                            }
                            $subject['teacherInfos']= (object) $teacherName;
                            // json_encode($subject['teacherInfos']);
                            // get all student mark by subject id  
                            $mark =  Matiere::join('evaluations as eval','matieres.id','=','eval.matiere_id')
                            ->join('type_evaluations as tEval','tEval.id','=','eval.type_evaluation_id')
                            ->join('periodes','periodes.id','=','eval.periode_id')
                            ->join('notes','notes.evaluation_id','=','eval.id')
                            ->join('eleves','eleves.id','=','notes.eleve_id')
                            ->where([
                                        'eval.matiere_id'=>$subject->id_subject,
                                        'eleve_id'=>$child->student_id
                                    ])
                            ->select(
                                        'notes.id as id',
                                        'tEval.name_te',
                                        'periodes.id as IDPeriode',
                                        'periodes.libelle_periode as periode',
                                        'notes.notation as note',
                                        DB::raw("CONCAT(notes.notation,'/',eval.notation) as note_obt"),
                                        'eval.notation'
                                    )
                                    ->groupBy(
                                        'notes.id',
                                        'tEval.name_te',
                                        'periodes.id',
                                        'periode',
                                        'notes.notation',
                                        'eval.notation'
                                    )
                                    ->orderBy('note', 'asc')  
                                    ->get();

                                $subject['total_count_mark'] = count($mark);
                                $subject['notes'] = $mark;
                            // nombre absence dans la matiere par periode
                            // $subject['absences'] = $periods;
                            // dd($subject);
                            // dd($H_Absences);
                         
                        }
    
                    }
                    
                
                    // dd($subjects);
                return response()->json([
                    'success' => true,
                    'parentID'=>$parent_id,
                    'total_count_children'=>$nbr_children,
                    'children'=>$children
                    // 'parentInfo'=>$parent

                            ]);
        } catch (Exception $exc) {
            
            return response()->json([
                'success' => false,
                'message' => $exc->getMessage(),
            ]);
        }
    }
}
