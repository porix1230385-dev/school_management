<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\helpers\Qs;
use App\Models\Classe;
use App\Models\Matiere;
use App\Models\Enseignant;
use App\Http\Controllers\Controller;

class EnseignantController extends Controller
{
    // get all enseignants 

    public function getAllEnseignants()
    {
        try{
            //get all records 
            $teachers = Enseignant::join('users', 'users.id','=','enseignants.user_id')
                        ->select('users.*','enseignants.id as ID_teacher','enseignants.matricule as matricule')
                        ->get();
                        // assign subject to each teacher
                        foreach ($teachers as $teacher) {
                            // dd($teachers);
                            $concerned_subject = Matiere::join('enseigners as ens','ens.matiere_id','=','matieres.id')
                                        ->join('enseignants as e2','e2.id','=','ens.enseignant_id')
                                        ->where('e2.id',$teacher->id)
                                        ->select('matieres.id as ID_subject','matieres.nom_matiere as subject_name')
                                        ->distinct('ens.matiere_id')
                                        ->get();
                            $teacher['subjects'] = $concerned_subject;
                            // 
                            // assign class to each teacher
                            foreach ($teacher['subjects'] as $subject) {
                                $my_class = Classe::join('enseigners as ens','ens.matiere_id','=','classes.id')
                                        ->join('matieres as mat','mat.id','=','ens.matiere_id')
                                        ->where([
                                            'mat.id'=>$subject->ID_subject,
                                            'ens.enseignant_id' => $teacher->id
                                        ])
                                        ->select(
                                            'classes.id as ID_class',
                                            'classes.libelle_classe as class_name'
                                        )
                                        // ->distinct('ens.matiere_id')
                                        ->get();
                               $subject['class'] = $my_class;
                            }
                        }
            // $teacher_subject = Qs::assignSubjectToEachTeacher($teachers);
              
        //   dd($teacher_subject);
            return response()->json([
                'success' => true,
                'teachers'=>$teachers,
                'count_teachers' => count($teachers) 
            ]);

        }catch(Exception $exc){
            return response()->json([
                'success' => false,
                'error_type' => 'SERVER ERROR',
                'message' => $exc->getMessage()
            ]);
        }
    }

    // get more information by teacher 
    public function showTeacherById(int $enseignant_id)
    {
        try {
            
        } catch (Exception $exc) {
            return response()->json([
                'success' => false,
                'error_type' => 'SERVER ERROR',
                'message' => $exc->getMessage()
            ]);
        }
        // if enseignant not found
       $un_enseignant = Enseignant::join('users', 'users.id','=','enseignants.user_id')
                    ->where('enseignants.id', $enseignant_id)->first();
        if(empty($un_enseignant))
        {
            return response()->json([
                'success' =>false,
                'Error_type' => 'SERVER ERROR',
                'message' => 'Teacher not found'
            ]);
        }
    
       $Tclasse = Qs::getTeacherClasses($enseignant_id);
       $TSubject = Qs::getTeacherSubject($enseignant_id);
        // dd($Tclasse);
        if((!empty($TSubject)) && (!empty($Tclasse)))
        {
            return response()->json([
                'success' => true,
                'enseignant_id' => $enseignant_id,
                'enseignantInformations' => $un_enseignant,
                'mes_classes' => $Tclasse,
                'nbr_classe' => count($Tclasse),
                'mes_matieres' => $TSubject,
                'nbr_matiere' => count($TSubject)

            ]);
        }

    }


    // get all enseignants by class_id
    public function getAllEnseignantByClassId(int $class_id)
    {
        try{
            // on fait une jointure pour vérifier si l'id de la classe passée en param est une classe secondaire
            $my_classe_id = Qs::IsSecondaryClass($class_id);
            if(empty($my_classe_id)){
                return response()->json([
                    'success' => false,
                    'erro_type' =>'SERVER ERROR',
                    'messages' => 'CLASSE NOT FOUND'
                ]);
            }
            
                $enseignants = Qs::getAllEnseignantBySClasse($my_classe_id->id);
                if($enseignants){
                    return response()->json([
                        'success' => true,
                        'enseignants' => $enseignants,
                        'count_enseignants_by_class_id' => count($enseignants),
                    ]);
                }
        }catch(Exception $exc){
            return response()->json([
                'success' => false,
                'erro_type' =>'SERVER ERROR',
                'messages' => $exc->getMessage()
            ]);
        }

    }

    // get all enseignants by matieres_id
    public function getAllEnseignantByMatiere(int $matiere_id)
    {
        try{

            // verifie si la matiere existe et est une matiere du secondaire
            $matiere = Qs::findSubject($matiere_id);
            if(empty($matiere)){
                return response()->json([
                    'success' => false,
                    'erro_type' =>'SERVER ERROR',
                    'messages' => 'MATIERE NOT FOUND'
                ]);
            }
            
            $mat_est_ens_secondaire = Qs::IsSecondarySubject($matiere->id);
            if(empty($mat_est_ens_secondaire)){
                return response()->json([
                    'success' => false,
                    'erro_type' =>'SERVER ERROR',
                    'messages' => 'SUBJECT NOT FOUND IN THIS SECONDARY CLASS'
                ]);
            }
           
            $enseignants = Qs::getAllEnseignantBySubject($matiere_id);

            if(!empty($enseignants)){
                return response()->json([
                    'success' => true,
                    'enseignants' =>$enseignants,
                    'count_enseignants_by_subject' => count($enseignants)
                ]);
            }

        }catch(Exception $exc){
            return response()->json([
                'success' => false,
                'erro_type' =>'SERVER ERROR',
                'messages' => $exc->getMessage()
            ]);
        }
    }

}
