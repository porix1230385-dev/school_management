<?php

namespace App\Models;

use App\Models\Role;
use App\Models\AvoirProfil;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profil extends Model
{
    use HasFactory;

     // function roles
     public function roles()
     {
         return $this->hasMany(Role::class);
     }
     // function avoir_profils
     public function avoir_profils()
     {
         return $this->hasMany(AvoirProfil::class);
     }

     

     
}
