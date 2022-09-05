<?php

namespace App\Models;

use App\Models\SeanceMatiere;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fichier extends Model
{
    use HasFactory;

    // function seance_matiere
    public function seance_matiere()
    {
        return $this->belongsTo(SeanceMatiere::class);
    }
}
