<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Models\Cycle;
use App\Models\Eleve;
use App\Models\Classe;
use App\Models\Niveau;
use App\Http\Controllers\Controller;

class NiveauController extends Controller
{
    // get All classe level 
    public function getAllClasseLevel()
    {

        try {
            //get all record
            $niveaux = Niveau::all();
            foreach ($niveaux as $niveau) {
                $classes = Classe::where('niveau_id', $niveau->id);   
            }
            // dd(count($classes));
            return response()->json([
                'success' => true,
                // 'count_classes_by_level' => count($classes),
                // 'count_students_for_class_level' => $students,
                'total_count_classes_level' => count($niveaux),
                'niveaux' => $niveaux
            ]);
        } catch (Exception $exc) {
            return response()->json([
                'success' => false,
                'message' => $exc->getMessage()]);
        }

    }


    // get level by cycle  
    public function getAllLevelByCycle(int $cycle_id)
    {
        // get records
        try {
             $classes_level_cycle = Niveau::join('cycles','niveaux.cycle_id','=','cycles.id') // on récupère les niveaux associés au cycle 
                        ->where('cycles.id',$cycle_id) // .. dont l'id est $cycle_id
                        ->select('cycles.*','niveaux.*')
                        ->get();
            
            return response()->json([
                'success' => true,
                'cycle_id' => $cycle_id,
                // 'classes_level' => $classes_level_cycle,
                'niveaux' => $classes_level_cycle,
                // 'cycles' =>$cycles,
                'count_level_fo_cycle_id' => count($classes_level_cycle)
            ]);
            
        } catch (Exception $exc) {
            return response()->json([
                'success' => false,
                'error_type'=>'SERVER ERROR',
                'message' => $exc->getMessage()
            ]);
        }
        
   
    }

    
    
    
   
}
