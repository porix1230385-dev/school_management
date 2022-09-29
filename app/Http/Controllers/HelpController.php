<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\MyClassRepo;
use Illuminate\Support\Facades\DB;

class HelpController extends Controller
{
    //
    protected $my_class;
    // , $pay, $student, $year;
    //MyClassRepo $my_class, PaymentRepo $pay, StudentRepo $student

    public function __construct(MyClassRepo $my_class)
    {
        $this->my_class = $my_class;
        // $this->pay = $pay;
        // $this->year = Qs::getCurrentSession();
        // $this->student = $student;

        // $this->middleware('teamAccount');
    }

    function get_classes(Request $request){
        $classes = DB::table('classes')
        ->select('id as ID_class','libelle_classe as className')
        ->whereNiveauId($request->ID_level)
        ->get();
        $d['classes'] = $classes;
        
        $sco_info = DB::table('modality_payements as mp')
        ->join('annee_scolaires as ansco','ansco.id','=','mp.annee_scolaire_id')
        ->select('frais_inscription as f_ins','montant_total_scolarite as mtn_tt')
        ->where('naf_af',$request->statut)
        ->where('ansco.libelle_as',$request->current_session)
        ->whereNiveauId($request->ID_level)
        ->first();
        // dd($sco_info);
        // dd($classes);
        $d['scolarite_info'] = $sco_info;
        // dd($sco_info);
        return response()->json($d);
    }
    
    // function get_sco_info(Request $request){
    //     $sco_info = DB::table('modality_payements as mp')
    //     ->join('annee_scolaires as ansco','ansco.id','=','mp.annee_scolaire_id')
    //     ->select('frais_inscription','montant_total_scolarite')
    //     ->where('naf_af',$request->status)
    //     ->where('ansco.libelle_as',$request->current_session)
    //     ->whereNiveauId($request->ID_level)
    //     ->first();
    //     return response()->json($sco_info);
    // }
}
