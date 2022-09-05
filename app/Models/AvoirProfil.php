<?php

namespace App\Models;

use App\Models\User;
use App\Models\Profil;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AvoirProfil extends Model
{
    use HasFactory;

    // function user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // function profil
    public function profil()
    {
        return $this->belongsTo(Profil::class);
    }
}
