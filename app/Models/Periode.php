<?php

namespace App\Models;

use App\Models\Absence;
use App\Models\Evaluation;
use App\Models\AnneeScolaire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Periode extends Model
{
    use HasFactory;
    
    
    // function annee_scolaire
    public function annee_scolaire()
    {
        return $this->belongsTo(AnneeScolaire::class);
    }

    // function evaluations
    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }

    // function absences 

    public function absences()
    {
        return $this->hasMany(Absence::class);
    }
}
