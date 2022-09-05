<?php

namespace App\Models;

use App\Models\Evaluation;
use App\Models\EstEnseigner;
use App\Models\SeanceMatiere;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Matiere extends Model
{
    use HasFactory;

    // function seance_matieres
   public function seance_matieres()
   {
       return $this->hasMany(SeanceMatiere::class);
   }
   
    // function evaluations
    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }

     // function enseigners
     public function enseigners()
     {
         return $this->hasMany(Enseigner::class);
     }

      // function est_enseigners
    public function est_enseigners()
    {
        return $this->hasMany(EstEnseigner::class);
    }
}
