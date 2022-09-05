<?php

namespace App\Models;

use App\Models\Eleve;
use App\Models\Periode;
use App\Models\SeanceMatiere;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Absence extends Model
{
    use HasFactory;

    // function eleve
    public function eleve()
    {
        return $this->belongsTo(Eleve::class);
    }

    // function seance_matiere
    public function seance_matiere() 
    {
        return $this->belongsTo(SeanceMatiere::class);
    }

    // function periode
    public function periode()
    {
        return $this->belongsTo(Periode::class);
    }
}
