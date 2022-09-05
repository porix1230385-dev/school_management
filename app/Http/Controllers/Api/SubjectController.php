<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Models\Niveau;
use App\Models\Matiere;
// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubjectController extends Controller
{
    //
    // get subject by level
    public function getSubjectsByLevel($level_id)
    {
        // if the level exist
        $level = Niveau::find($level_id)->first();

        if(empty($level)) {
            return response()->json([
                'success' => false,
                'error_type'=>'SERVER ERROR',
                'message' => 'Level not found',

            ]);
        }
        try {
            $subjectsOfLevel = Matiere::join('est_enseigners','est_enseigners.matiere_id', '=','matieres.id')
                            ->join('niveaux','niveaux.id','=','est_enseigners.niveau_id')
                            ->where('niveaux.id',$level_id)
                            ->select('matieres.id as id_matiere','matieres.nom_matiere')
                            ->get();
            return response()->json([
                'success' => true,
                'level_id'=>$level_id,
                'matieres' => $subjectsOfLevel
            ]);
        } catch (Exception $e){

            return response()->json([
                'success' => false,
                'error_type'=>'SERVER ERROR',
                'message' => $e->getMessage()

            ]);
        }

    } 
}
