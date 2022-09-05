<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\helpers\Qs;
use App\Models\Instituteur;
// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InstituteurController extends Controller
{
    //
    public function getAllIntituteurs()
    {
        // get all instituteurs
        try{
            // get all records 
            $instituteurs = Instituteur::join('users','users.id','=','instituteurs.user_id')
                        ->select('users.*','instituteurs.*')
                        ->get();

            return response()->json([
                'success' => true,
                'instituteurs'=>$instituteurs,
                'count_instituteurs' => count($instituteurs)
            ]);

        }catch(Exception $exc){
            return response()->json([
                'success' => false,
                'error_type' => 'SERVER ERROR',
                'message' => $exc->getMessage()
            ]);
        }
    }

    public function getInstituteurByClasse_id(int $class_id)
    {
        // 
        try {
            $my_class = Qs::IsPrimaryClass($class_id);
            // dd($my_class);
            if(empty($my_class)){
                return response()->json([
                    'success' => false,
                    'error_type' =>'SERVER ERROR',
                    'message' => 'IS NOT PRIMARY CLASS'
                ]);
            }
        
            $instituteur = Instituteur::join('users','users.id','=','instituteurs.user_id')
                        ->join('classe_primaires','classe_primaires.instituteur_id','=','instituteurs.id')
                        ->join('classes','classes.id','=','classe_primaires.classe_id')
                        ->where('classe_primaires.classe_id',$class_id)
                        ->select('users.*','instituteurs.*','classes.*')
                        ->get();

                        if(!empty($instituteur)){
                            return response()->json([
                                'success' => true,
                                'classe_id'=> $class_id,
                                'instituteur' => $instituteur
                            ]);
                        }
                    // dd($instituteur);
        } catch (Exception $exc) {
            return response()->json([
                'success' => false,
                'error_type' => 'SERVER ERROR',
                'message' => $exc->getMessage()
            ]);
        }
    }

    
}
