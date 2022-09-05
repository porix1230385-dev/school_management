<?php

namespace App\Models;

use App\Models\Classe;
use App\Models\Matiere;
use App\Models\Periode;
use App\Models\TypeEvaluation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Evaluation extends Model
{
    use HasFactory;

    protected $fillable =  [
        'description_eval',
        'coefficient_eval',
        'date_evaluation',
        'matiere_id',
        'periode_id',
        'classe_id',
        'created_at',
        'updated_at',
        'type_evaluation_id',
        'notation',
        'duree',
        'heure_debut',
        'evaluation_state'
    ];

     // function matiere
     public function matiere()
     {
         return $this->belongsTo(Matiere::class);
     }

      // function periode
    public function periode()
    {
        return $this->belongsTo(Periode::class);
    }

     // function classe
     public function classe()
     {
         return $this->belongsTo(Classe::class);
     }

     // function notes
    public function notes()
    {
        return $this->hasMany(Note::class);
    }

     // function type_evaluation
     public function type_evaluation()
     {
         return $this->belongsTo(TypeEvaluation::class);
     }


}
