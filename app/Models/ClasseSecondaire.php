<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClasseSecondaire extends Model
{
    use HasFactory;

     // function classe
     public function classe()
     {
         return $this->belongsTo(Classe::class);
     }
}
