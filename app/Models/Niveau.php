<?php

namespace App\Models;

use App\Models\Cycle;
use App\Models\Classe;
use App\Models\EstEnseigner;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Niveau extends Model
{
    use HasFactory;

     // function cycle
     public function cycle()
     {
         return $this->belongsTo(Cycle::class);
     }

     // function classes
    public function classes()
    {
        return $this->hasMany(Classe::class);
    }

    // function est_enseigners
    public function est_enseigners()
    {
        return $this->hasMany(EstEnseigner::class);
    }
}
