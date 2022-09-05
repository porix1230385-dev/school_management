<?php

namespace App\Http\Controllers\Api;

use App\helpers\Qs;
use App\Models\Classe;
use App\Models\Matiere;
use App\Models\Evaluation;
use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    // get evaluation by subject 

    public function getEvaluationBySubjectClasses(int $class_id, int $subject_id)//,int $period_id=null
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
        // echo $class_id." ".$subject_id;
        // die();
        // verifier si j'enseigne la matiere dans cette classe
        $verifIf = Qs::CheckIfSubjectIsTaught($level_class, $subject_id);
        if($verifIf == false) {
            return response()->json([
                'success' => false,
                'error_type'=>'SERVER ERROR',
                'message' => 'Subject not taught in class or class not found',
            ]);
        }
        try {
                $evaluations = Evaluation::join('type_evaluations','type_evaluations.id','=','evaluations.type_evaluation_id')
                    ->join('matieres','matieres.id','=','evaluations.matiere_id')
                    ->join('classes','classes.id','=','evaluations.classe_id')
                    ->join('periodes','periodes.id','=','evaluations.periode_id')
                    ->where([
                        'matieres.id' =>$subject_id,
                        'classes.id' =>$class_id,
                        'evaluations.evaluation_state' => 1
                        // 'periodes.id' =>$period
                    ])
                    ->select('evaluations.id as id_evaluation','type_evaluations.name_te as type_evaluation','matieres.id as id_matiere','matieres.nom_matiere as matiere','evaluations.*','classes.id as id_classe','classes.libelle_classe as classe','periodes.id as id_periode','periodes.libelle_periode as periode')
                    ->get();
                    $nbr_eval_f = count($evaluations);
                    // dd($nbr_eval_f);
                    if($nbr_eval_f < 0){

                        return response()->json([
                            'success' => false,
                            'message'=> 'pas d\'évaluation faite dans cette matiere. essayez de consulter la liste des évaluations en cour..'
                        ]);
                    }
                    return response()->json([
                        'success' => true,
                        'evaluations' => $evaluations,
                        'nombre_evaluations'=>$nbr_eval_f
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
