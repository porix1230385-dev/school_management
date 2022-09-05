<?php
namespace App\Repositories;

use App\Models\Eleve;

class StudentRepo
{
    public function findStudentsByClass($class_id)
    {
        return Eleve::join('inscrires', 'eleves.id', '=', 'inscrires.eleve_id')
                            ->join('classes', 'classes.id', '=', 'inscire.class_id')
                            ->where('classes.id', $class_id)
                            ->select('eleves.*')
                            ->get();
    }

}