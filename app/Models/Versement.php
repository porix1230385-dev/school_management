<?php

namespace App\Models;

// use App\Models\Eleve;
// use App\Models\AnneeScolaire;
use App\Models\ModalityPayement;
use App\Models\VersementScolarite;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Versement extends Model
{
    use HasFactory;

    // // function modality_payements
    public function modality_payements()
    {
        return $this->belongsTo(ModalityPayement::class);
    }

    //   // function versement_scolarites
      public function versement_scolarites()
      {
          return $this->belongsTo(VersementScolarite::class);
      }
}
