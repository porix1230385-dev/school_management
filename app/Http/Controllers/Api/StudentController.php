<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Models\Eleve;
use App\Models\Classe;
use App\Models\Niveau;
use App\Models\Inscrire;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    // student controller for API consumers
    // protected $student;

    // eleves inscrit dans une classe 
    public function getAllStudents()
    {
        try {

            // TODO: améliorer la requête de récupération des élèves 
            $students = Eleve::join('users', 'users.id', '=', 'eleves.user_id')
                ->join('inscrires','inscrires.eleve_id','=','eleves.id')
                ->join('annee_scolaires','annee_scolaires.id','=','inscrires.annee_scolaire_id')
                ->join('classes','classes.id','=','inscrires.classe_id')
                ->join('niveaux','niveaux.id','=','classes.niveau_id')
                ->join('cycles','cycles.id','=','niveaux.cycle_id')
                ->select('eleves.*', 'users.nom', 'users.prenom', 'users.email', 'users.telephone1', 'users.genre','classes.libelle_classe','niveaux.libelle_niveau','cycles.libelle_cycle','inscrires.date_inscription','annee_scolaires.libelle_as')
                ->get();
                // dd($students);
            // visualize datas
            return response()->json([
                'success' => true,
                'total_count' => count($students),
                'total_count_girls' => count($students->where('genre', 'Féminin')),
                'total_count_boys' => count($students->where('genre', 'Masculin')),
                'students' => $students
            ]);
        } catch (Exception $exc) {
            // visualize error
            return response()->json([
                'success' => false,
                'message' => $exc->getMessage()
            ]);
        }
    }

     // Get students by parent
     public function getStudentsByParent(int $id_parent)
     {
         try {
             // get concerned students records
             $students = Eleve::join('users', 'users.id', '=', 'eleves.user_id') // On récupère les élèves associés à des utilisateurs...
                ->join('inscrires', 'inscrires.eleve_id', '=', 'eleves.id') // ... qui sont inscrires
                 ->join('classes', 'classes.id', '=', 'inscrires.classe_id') // ...et à des classes 
                 ->join('parenters','parenters.eleve_id', '=', 'eleves.id')
                 ->join('parents','parents.id', '=', 'parenters.parent_id')
                 ->select('eleves.*','users.*','parents.*','classes.*')
                 ->where('parenters.parent_id', '=', $id_parent) // On récupère les élèves qui ont un parent qui a l'id $id_parent
                 ->get();
             // assign to each student record the class section
             foreach ($students as $student)
                 $student['ma_classe'] = Inscrire::find($student->classe_id);
             // visualize datas
             return response()->json([
                 'success' => true,
                 'id_parent' => $id_parent,
                 'total_count' => count($students),
                 'total_count_girls' => count($students->where('genre', 'Féminin')),
                 'total_count_boys' => count($students->where('genre', 'Masculin')),
                 'students' => $students
             ]);
         } catch (Exception $exc) {
             // visualize error
             return response()->json([
                 'success' => false,
                 'message' => $exc->getMessage()
             ]);
         }
     }

      // Get students by class
    public function getStudentsByClass(int $my_class_id)
    {
        try {
            // if class doesn't exists
            $my_class = Classe::find($my_class_id);
            if (!$my_class) {
                return response()->json([
                    'success' => false,
                    'error_type' => 'CLASS_NOT_FOUND',
                    'message' => 'Classe introuvable',
                ]);
            }
            // get concerned records
            $students = Eleve::join('users', 'users.id', '=', 'eleves.user_id') // On récupère les élèves associés à des utilisateurs...
                ->join('inscrires', 'inscrires.eleve_id', '=', 'eleves.id') // ... qui sont inscrires
                ->join('classes', 'classes.id', '=', 'inscrires.classe_id') // ...et à des classes 
                ->where('inscrires.classe_id', $my_class_id) // dont l'id est $my_class_id
                ->select('users.*','inscrires.*','classes.*')
                ->get();
            // assign to each student record the class section
            foreach ($students as $student)
                $student['class_section'] = Inscrire::find($student->classe_id);
            // visualize datas
            return response()->json([
                'success' => true,
                'classe' => $my_class->libelle_classe,
                'total_count' => count($students),
                'total_count_girls' => count($students->where('genre', 'Féminin')),
                'total_count_boys' => count($students->where('genre', 'Masculin')),
                'students' => $students,
            ]);
        } catch (Exception $exc) {
            // visualize error
            return response()->json([
                'success' => false,
                'error_type' => 'SERVER_ERROR',
                'message' => $exc->getMessage()
            ]);
        }
    }

      // Get students by class level
      public function getStudentsByClassLevel(int $class_level)
      {
          try {
               
            $my_level = Niveau::find($class_level);
            if (!$my_level) {
                return response()->json([
                    'success' => false,
                    'error_type' => 'LEVEL_NOT_FOUND',
                    'message' => 'Niveau introuvable',
                ]);
            }
              // get concerned records
              $students = Eleve::join('users', 'users.id', '=', 'eleves.user_id') // On récupère les élèves associés à des utilisateurs...
              ->join('inscrires', 'inscrires.eleve_id', '=', 'eleves.id') // ... qui sont inscrires
              ->join('classes', 'classes.id', '=', 'inscrires.classe_id') // ...et à des classes 
              ->join('niveaux', 'niveaux.id', '=', 'classes.niveau_id')
              ->where('niveaux.id', $class_level) // dont l'id est $level_id
              ->select('users.*','inscrires.*','classes.*','niveaux.*') 
              ->get();
              // visualize datas
              return response()->json([
                  'success' => true,
                  'niveau' => $my_level->libelle_niveau,
                  'total_count' => count($students),
                  'total_count_girls' => count($students->where('genre', 'Féminin')),
                  'total_count_boys' => count($students->where('genre', 'Masculin')),
                  'students' => $students,
              ]);
          } catch (Exception $exc) {
              // visualize error
              return response()->json([
                  'success' => false,
                  'error_type' => 'SERVER_ERROR',
                  'message' => $exc->getMessage()
              ]);
          }
      }

}
