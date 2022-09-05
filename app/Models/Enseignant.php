<?php

namespace App\Models;

use App\Models\Enseigner;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Enseignant extends Model
{
    use HasFactory;
    
    // function user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // function enseigners
    public function enseigners()
    {
        return $this->hasMany(Enseigner::class);
    }
}
