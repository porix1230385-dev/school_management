<?php

namespace App\Models;

use App\Models\Matiere;
use App\Models\Enseignant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Enseigner extends Model
{
    use HasFactory;

    // function enseignant
    public function enseignant()
    {
        return $this->belongTo(Enseignant::class);
    }
    
    // function matiere
    public function matiere()
    {
        return $this->belongTo(Matiere::class);
    }

}
