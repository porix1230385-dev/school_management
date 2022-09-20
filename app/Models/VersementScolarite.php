<?php

namespace App\Models;

use App\Models\Eleve;
use App\Models\Versement;
use App\Models\AnneeScolaire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VersementScolarite extends Model
{
    use HasFactory;

    // // function eleve
    public function eleve()
    {
        return $this->belongsTo(Eleve::class);
    }

    //   // function anneeScolaire
      public function anneeScolaire()
      {
          return $this->belongsTo(AnneeScolaire::class);
      }

      // versement
      public function versement()
      {
          return $this->belongsTo(Versement::class);
      }
}
