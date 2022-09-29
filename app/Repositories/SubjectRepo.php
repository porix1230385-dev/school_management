<?php
namespace App\Repositories;

use App\Models\Matiere;

class SubjectRepo 
{
    
    public function getAllSubjects()
    {
        return Matiere::all();
    }

    public function getAllSubjectByLevel($level_id)
    {
       return $subjectsOfLevel = Matiere::join('est_enseigners','est_enseigners.matiere_id', '=','matieres.id')
                            ->join('niveaux','niveaux.id','=','est_enseigners.niveau_id')
                            ->where('niveaux.id',$level_id)
                            ->select('matieres.id as id_matiere','matieres.nom_matiere')
                            ->get();
    }

    // public function getAllEvalBySubject()
    // {
    //     return 
    // }
}