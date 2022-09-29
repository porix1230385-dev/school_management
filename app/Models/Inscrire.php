<?php

namespace App\Models;

use App\Models\Eleve;
use App\Models\Classe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Inscrire extends Model
{
    use HasFactory;

    protected $fillable =  [
        'date_inscription',
        'montant_inscription',
        'eleve_id',
       'annee_scolaire_id',
        'classe_id',
       'created_at',
        'updated_at'
    ];
    // fonction eleve
    public function eleve()
    {
        return $this->belongsTo(Eleve::class);
    }
    
    // fonction classe
    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }
}
