<?php

namespace App\Models;

use App\Models\Serie;
use App\Models\Niveau;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cycle extends Model
{
    use HasFactory;

    // function niveaux 
    public function niveaux()
    {
        return $this->hasMany(Niveau::class);
    }

    // function series
    public function series()
    {
        return $this->hasMany(Serie::class);
    }
}
