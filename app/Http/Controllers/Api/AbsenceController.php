<?php

namespace App\Http\Controllers\Api;

use App\Models\Absence;
use App\Models\Periode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AbsenceController extends Controller
{
    //
    protected $stu,$class,$subject;
    // public function __construct(StudentRepo $stud,) 
    // {

    // }

    public function getAbsencesByStudent($student_id)
    {
        // $periods = Periode::select('id','libelle_periode')->get();
        // foreach($subject['trimestres'] as $periode)
        // {
        //     $p_id = $periode->id;
        //     // dd($p_id);
        //     // dd($periode->id);
        //     // dd($periode);
        //     $H_Absences = Absence::join('seance_matieres as sm','absences.seance_matiere_id','=','sm.id')
        //     ->join('matieres','matieres.id','=','sm.matiere_id')
        //     ->join('periodes as pr','pr.id','=','absences.periode_id')
        //     ->join('eleves','eleves.id','=','absences.eleve_id')
        //     ->where([
        //             'eleves.id'=>$student_id,
        //             'matieres.id'=>$subject->id_subject,
        //             'pr.id'=>$p_id
        //         ])
        //     ->select(
        //         'pr.libelle_periode as periode',
        //         'absences.nbre_heure_absence as nbrHeureAbs',
        //         // DB::raw('select SUM(absences.nbre_heure_absence) as nbre_absence_par_trimestre')
                
        //          )
        //         //->groupBy(
        //         //     'pr.libelle_periode',
        //         //     'absences.nbre_heure_absence'
        //         // )
        //         ->get();
                
        //         $periode['absences'] = $H_Absences;
        // }

    }
    
}
