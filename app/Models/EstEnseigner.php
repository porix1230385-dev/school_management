<?php

namespace App\Models;

use App\Models\Niveau;
use App\Models\Matiere;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EstEnseigner extends Model
{
    use HasFactory;

    // function matiere
    public function matiere()
    {
        return $this->belongsTo(Matiere::class);
    }

    // function niveau
    public function niveau()
    {
        return $this->belongsTo(Niveau::class);
    }
}
