<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\helpers\Qs;
use App\Models\Note;
// use Illuminate\Http\Request;
use App\Models\Classe;
use App\Models\Matiere;
use App\Http\Controllers\Controller;

class NoteController extends Controller
{
    //
    // get students mark by subject_id
    public function getStudentsMarksBySubject(int $class_id, int $subject_id)
    {
        // find class and subject 
        $classe  = Classe::where('classes.id',$class_id)->first();
        // dd($classe);

        if(empty($classe)) {
            return response()->json([
                'success' => false,
                'error_type'=>'SERVER ERROR',
                'message' => 'Class not found',

            ]);
        }
        $level_class = $classe->niveau_id;
        // dd($level_class); 
        $subject = Matiere::where('matieres.id',$subject_id)->first();

        if(empty($subject)) {
            return response()->json([
                'success' => false,
                'error_type'=>'SERVER ERROR',
                'message' => 'Subject not found',

            ]);
        }
        $verifIf = Qs::CheckIfSubjectIsTaught($level_class, $subject_id);
        if($verifIf == false) {
            return response()->json([
                'success' => false,
                'error_type'=>'SERVER ERROR',
                'message' => 'Subject not taught in class or class not found',
            ]);
        }
            try {
                $notes = Note::join('evaluations','evaluations.id','=','notes.evaluation_id')
                        ->join('type_evaluations','type_evaluations.id','=','evaluations.type_evaluation_id')
                        ->join('eleves','eleves.id','=','notes.eleve_id')
                        ->join('inscrires', 'inscrires.classe_id', '=', 'evaluations.classe_id')
                        ->join('matieres','matieres.id','=','evaluations.matiere_id')
                        ->join('classes','classes.id','=','evaluations.classe_id')
                        ->join('periodes','periodes.id','=','evaluations.periode_id')
                        ->where([
                            'matieres.id' =>$subject_id,
                            'classes.id' =>$class_id,
                            'evaluations.evaluation_state' => 1,
                            'periodes.id'=>1
                        ])
                        // ->groupBy('matricule')
                        ->select('eleves.matricule as matricule','type_evaluations.name_te as type_evaluation','evaluations.description_eval as description','evaluations.coefficient_eval as coefficient','evaluations.notation as notation','matieres.nom_matiere as matiere','notes.notation as note','classes.libelle_classe as classe','periodes.libelle_periode as periode',)
                        ->get();
                        dd($notes);

                    $nbr_note = count($notes);
                    // dd($nbr_eval_f);
                    if($nbr_note < 0){

                        return response()->json([
                            'success' => false,
                            'message'=> 'pas de notes disponible dans cette matiere'
                        ]);
                    }
                    return response()->json([
                        'success' => true,
                        'evaluations' => $notes,
                        'nombre_evaluations'=>$nbr_note
                    ]);
        //    dd($evaluations);
        } catch (Exception $ex) {
            return response()->json([
                'success' => false,
                'message' => $ex->getMessage(),
            ]);
        }
    }
}
