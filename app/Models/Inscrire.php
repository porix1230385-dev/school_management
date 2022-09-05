<?php

namespace App\Models;

use App\Models\Eleve;
use App\Models\Classe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Inscrire extends Model
{
    use HasFactory;
    // fonction eleve
    public function eleve()
    {
        return $this->belongsTo(Eleve::class);
    }
    
    // fonction classe
    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }
}
