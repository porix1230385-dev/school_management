<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Models\Niveau;
use App\Http\Controllers\Controller;

class ClasseController extends Controller
{
    //

    // get all classe
    // public function getAllClasse() 
    // {
    //     try {
    //         //code...
    //         // get all records
    //         $classes = Classe::all();
    //     } catch (Exception $e) {
    //         //throw $th;
    //     }
    // }

        // get all class by classe_level
        public function getAllClasseByLevel(int $level_id)
        {
            try {
                // get records 
                $niveaux = Niveau::join('classes','niveaux.id','=','classes.niveau_id')
                ->where('niveaux.id',$level_id)
                ->select('classes.*','niveaux.*')
                ->get();

                return response()->json([
                'success' => true,
                'level_id' => $level_id,
                'niveaux' => $niveaux,
                'count_classes_by_level' => count($niveaux)
                ]);

            } catch (Exception $exc)  {
                return response()->json([
                    'success' => false,
                    'error_type'=>'SERVER ERROR',
                    'message' => $exc->getMessage()
                ]);
            }
            
        }

}
