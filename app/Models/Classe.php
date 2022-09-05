<?php

namespace App\Models;

use App\Models\Niveau;
use App\Models\Evaluation;
use App\Models\ClassePrimaire;
use App\Models\ClasseSecondaire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classe extends Model
{
    use HasFactory;

     // function niveau
     public function niveau()
     {
         return $this->belongsTo(Niveau::class);
     }

     // function evaluations
    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }

    // function classe_primaires
    public function classe_primaires()
    {
        return $this->HasMany(ClassePrimaire::class);
    }
    // function classe_seconaires
    public function classe_seconaires()
    {
        return $this->HasMany(ClasseSecondaire::class);
    }

    // function inscrires
    public function inscrires()
    {
        return $this->hasMany(Inscrire::class);
    }
}
