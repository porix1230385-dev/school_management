<?php

namespace App\Models;

use App\Models\Eleve;
use App\Models\Evaluation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Note extends Model
{
    use HasFactory;

    protected $fillable =  [
            'notation',
            'appreciation',
            'evaluation_id',
            'eleve_id',
            'created_at',
            'updated_at'
    ];

      // function eleve
      public function eleve()
      {
          return $this->belongsTo(Eleve::class);
      }

      // function evalution
      public function evaluation()
      {
          return $this->belongsTo(Evaluation::class);
      }
}
