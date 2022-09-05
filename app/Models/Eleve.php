<?php

namespace App\Models;

use App\Models\Note;
use App\Models\Absence;
use App\Models\Inscrire;
use App\Models\Versement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Eleve extends Model
{
    use HasFactory;

     // function user
     public function user()
     {
         return $this->belongsTo(User::class);
     }

    // function absences
    public function absences()
    {
        return $this->hasMany(Absence::class);
    }

    // function versements
    public function versements()
    {
        return $this->hasMany(Versement::class);
    }
    
    // function notes
    public function notes()
    {
        return $this->hasMany(Note::class);
    }
    
    // function inscrires
    public function inscrires()
    {
        return $this->hasMany(Inscrire::class);
    }


}
