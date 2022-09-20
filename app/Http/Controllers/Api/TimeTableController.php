<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\helpers\Qs;
use App\Models\Jour;
use App\Models\Eleve;
use App\Models\Classe;
use App\Models\Enseignant;
use Illuminate\Http\Request;
use App\Models\MatiereClassett;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TimeTableController extends Controller
{
    //

    public function getTeacherTimeTable(int $teacher_id)
    {
        $enseignant = Enseignant::find($teacher_id);
        // dd($enseignant);
        if(empty($enseignant)){
            return response()->json([
                'success' => false,
                'error' =>'SERVER ERROR',
                'message' =>'TEACHER NOT FOUND'
            ]);
        }
        try {

            $teacher = Enseignant::join('users','users.id','=','enseignants.user_id')
            ->where('enseignants.id',$teacher_id)
            ->select('users.*','enseignants.matricule')
            ->get();
            
            $days = Jour::select('id','jour_name')->get();
            // dd($days);
            $teacher['timeTable'] = $days;
            // dd($teacher);
            foreach ($teacher['timeTable'] as $day) 
            {
                // dd($day->jour_name);
                // echo $day."\n";
                // echo gettype($day);
                // die();
                // get teacher classes
                // $my_classes = Qs::getTeacherClasses($teacher_id);
                 // get teacher subject
                //  $my_subjects = Qs::getTeacherSubject($teacher_id);
                 // get teacher subject and classes
                //  $my_classes_subjects = Qs::getTeacherSubjectClasse($teacher_id);
                //  dd($my_classes_subjects);
                // $trouve = 0;
               $tt =  MatiereClassett::join('enseigners','enseigners.matiere_id','=','matiere_classetts.matiere_id')
               ->join('matieres','matieres.id','=','enseigners.matiere_id')
               ->join('classes','classes.id','=','matiere_classetts.classe_id')
               ->join('classe_secondaires','classe_secondaires.id','=','enseigners.classe_secondaire_id')
            ->where(
                [
                    'enseigners.enseignant_id'=>$teacher_id,
                    'matiere_classetts.jour_id' => $day->id,
                    // 'classes.id'=>$my_classe_subject->id_classe,
                    // 'matieres.id'=>$my_classe_subject->id_matiere
                ])
                // ->
                ->select(
                    'matiere_classetts.hm_debut as heure_debut',
                    'matiere_classetts.jour_id as id_jour',
                    'matiere_classetts.duree_H as duree',
                    // DB::select("SELECT mat.id, mat.nom_matiere, mat.abreviation  FROM matieres as mat where mat.id = $my_classe_subject->id_matiere "),
                    // DB::select("SELECT e.id as student_id, e.matricule as matricule, u.id as userID, u.nom as nom, u.prenom as prenom, u.genre as genre
                    //      FROM eleves as e 
                    //     INNER JOIN users as u ON u.id = e.user_id
                    //     INNER JOIN inscrires as ins ON ins.eleve_id = e.id
                    //     INNER JOIN classe as c ON c.id = ins.classe_id
                    //     WHERE c.id = $tt->id_classe
                    // "),
                    // DB::select("SELECT e.id as student_id, e.matricule as matricule, u.id as userID, u.nom as nom, u.prenom as prenom, u.genre as genre
                    //      FROM matiere_classetts as mc
                    //     INNER JOIN inscrires as ins ON ins.classe_id = mc.classe_id
                    //     INNER JOIN classe as c ON c.id = ins.classe_id
                    //     INNER JOIN eleves as e e.id = ins.eleve_id
                    //     INNER JOIN users as u ON u.id = e.user_id
                    //     -- INNER JOIN inscrires as ins ON ins.eleve_id = e.id
                    //     -- WHERE c.id = $tt->id_classe
                    // "),
                    'matieres.id as id_subject',
                    'matieres.nom_matiere as subject',
                    'classes.id as id_classe',
                    'classes.libelle_classe as classe'
                    )
                    ->groupBy(
                            'matiere_classetts.hm_debut',
                            'matiere_classetts.jour_id',
                            'matiere_classetts.duree_H',
                            'matieres.id',
                            'matieres.nom_matiere',
                            'classes.id',
                            'classes.libelle_classe'
                    )
                    ->orderBy('matiere_classetts.jour_id','asc')
                    ->orderBy('matiere_classetts.hm_debut','asc')
                    // ->distinct('')
                    ->get();
                   
                    $day['jours'] = $tt;
                    // $day['students'] = 
                    // dd($tt->id_classe);

                    // foreach($day['jours'] as $std)
                    // {
                    //     $students = Eleve::join('users', 'users.id', '=', 'eleves.user_id') // On récupère les élèves associés à des utilisateurs...
                    //     ->join('inscrires', 'inscrires.eleve_id', '=', 'eleves.id') // ... qui sont inscrires
                    //     ->join('classes', 'classes.id', '=', 'inscrires.classe_id') // ...et à des classes 
                    //     ->where('inscrires.classe_id', $std->id_classe) // dont l'id est $my_class_id
                    //     ->select('users.*')
                    //     ->get();
                    //     $day['jours']['students'] = $students;
                    // }

                }

               
               
            
        //      
            return response()->json([
                'success' => true,
                'teacherID'=>$teacher_id,
                'infos'=>$teacher
                
                ]);
           
        } catch (Exception $exc) {
            return response()->json([
                'success' =>false,
                'error' =>'SERVER ERROR',
                'message'=>'Error not found..'
            ]);
        }
       
    }

    // Get Timetable by Class
    public function getTimetableByClass(int $my_class_id){
        try {
            $classe = Classe::where('id', $my_class_id)->get();
            $days = Jour::select('id','jour_name')->get();
            // dd($days);
            // $tb_day = [];
            $classe['jours'] = $days;
            // dd( $classe['jours']);
            foreach ($classe['jours'] as $day) {
                // dd($day);
                $tt = MatiereClassett::join('matieres','matieres.id','=','matiere_classetts.matiere_id')
                        ->join('classes','classes.id','=','matiere_classetts.classe_id')
                        ->join('jours','jours.id','=','matiere_classetts.jour_id')
                        ->where(
                                [
                                    'jours.id' => $day->id,
                                    'classes.id'=>$my_class_id,
                                    // 'matiere_classetts.matiere_id'=>$my_classe_subject->id_matiere
                                ])
                        ->select(
                            'matiere_classetts.hm_debut as heure_debut',
                            // 'matiere_classetts.jour_id as id_jour',
                            'matiere_classetts.duree_H as duree',
                            // DB::select("SELECT mat.id, mat.nom_matiere, mat.abreviation  FROM matieres as mat where mat.id = $my_classe_subject->id_matiere "),
                            // DB::select("SELECT c.id, c.libelle_classe FROM classes as c where c.id = $my_classe_subject->id_classe"),
                            'matieres.id as id_subject',
                            'matieres.nom_matiere as subject',
                            // 'classes.id as id_classe',
                            // 'classes.libelle_classe as classe'
                            )
                            ->groupBy(

                                    'matiere_classetts.hm_debut',
                                    'matiere_classetts.duree_H',
                                    'matieres.id',
                                    'matieres.nom_matiere')
                                // ->distinct('matiere_classetts.matiere_id')
                            ->get();
                            // ->toArray();
                            // dd($tt);
                            $day['timeTable'] = $tt;    
                                           
            }
            return response()->json([
                'success' =>true,
                'classe'=>$classe,
            ]);
        } catch (Exception $exc) {
            return response()->json([
                'success' => false,
                'error' =>'SERVER ERROR',
                'message'=>'Error not found'
            ]);
        }
        
        

    }
}
