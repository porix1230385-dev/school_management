<?php

namespace App\Models;

use App\Models\Fichier;
use App\Models\Matiere;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SeanceMatiere extends Model
{
    use HasFactory;

   // function absences
   public function absences()
   {
       return $this->hasMany(Absence::class);
   }

    // function matiere
    public function matiere()
    {
        return $this->belongsTo(Matiere::class);
    }

    // function fichiers
    public function fichiers()
    {
        return $this->hasMany(Fichier::class);
    }
}
