<?php

namespace App\Models;

use App\Models\ClassePrimaire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Instituteur extends Model
{
    use HasFactory;

     // function user
     public function user()
     {
         return $this->belongsTo(User::class);
     }
     
     // function classe_primaire
     public function classe_primaire()
     {
         return $this->HasOne(ClassePrimaire::class);
     }
}
