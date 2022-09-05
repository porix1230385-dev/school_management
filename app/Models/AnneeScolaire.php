<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnneeScolaire extends Model
{
    use HasFactory;
    
    protected $fillable = ['libelle_as'];
    // function versements
    public function versements()
    {
        return $this->hasMany(Versement::class);
    }

    // function periodes
    public function periodes()
    {
        return $this->hasMany(Periode::class);
    }
}
