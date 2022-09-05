<?php

namespace App\Models;

use App\Models\Classe;
use App\Models\Instituteur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ClassePrimaire extends Model
{
    use HasFactory;

    // function classe
    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }
    // function instituteur
    public function instituteur()
    {
        return $this->belongsTo(Instituteur::class);
    }

}
