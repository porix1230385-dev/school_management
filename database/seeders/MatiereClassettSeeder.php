<?php

namespace Database\Seeders;


// use App\helpers\Qs;
// use App\Helpers\UsersHelpers;
use DateTime;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MatiereClassettSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          // echo  $h = date('H');
            //     $m = date('i');
            //     $int_h = (int) $h;
            //     $int_m = (int) $m;
                // (int) $m;
                // $hm = $h.':'.$m;
                // echo $hm;
                // echo gettype($hm)."\n";
                // echo gettype($m)."\n";
                // echo gettype($h)."\n";
                // echo "int_h ".gettype($int_h)."\n";
                // echo "int_m ".gettype($int_m)."\n";
         // $dt = Carbon::createFromTime(8,05,00)->toTimeString();
            // echo $dt->addHours(2);
            // echo $dt->toTimeString();
            //Carbon::createFromTime(8,05,00)->toTimeString()createFromTimeString
            //Carbon::createFromTime(8,05,00)->toTimeString()->toTimeString()
        $days = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi'];
        $data = [
            
            [
                'jour_id' =>1,
                'hm_debut' => Carbon::createFromTime(8,00,00,"Africa/Abidjan")->toTimeString(),
                'duree_H' =>1,
                'duree_M' =>30,
                'classe_id'=>19,
                'matiere_id'=>1,
                'annee_scolaire_id'=>1
            ],
            [
                'jour_id' =>1,
                'hm_debut' =>Carbon::createFromTime(9,30,00,"Africa/Abidjan")->toTimeString(),
                'duree_H' =>1,
                'duree_M' =>30,
                'classe_id'=>19,
                'matiere_id'=>2,
                'annee_scolaire_id'=>1
            ],
            [
                'jour_id' =>1,
                'hm_debut' =>Carbon::createFromTime(11,00,00,"Africa/Abidjan")->toTimeString(),
                'duree_H' =>1,
                'duree_M' =>null,
                'classe_id'=>19,
                'matiere_id'=>2,
                'annee_scolaire_id'=>1
            ],
            [
                'jour_id' =>1,
                'hm_debut' =>Carbon::createFromTime(13,15,00,"Africa/Abidjan")->toTimeString(),
                'duree_H' =>2,
                'duree_M' =>null,
                'classe_id'=>19,
                'matiere_id'=>6,
                'annee_scolaire_id'=>1
            ],
            [
                'jour_id' =>1,
                'hm_debut' =>Carbon::createFromTime(15,15,00,"Africa/Abidjan")->toTimeString(),
                'duree_H' =>1,
                'duree_M' =>null,
                'classe_id'=>19,
                'matiere_id'=>19,
                'annee_scolaire_id'=>1
            ],
            [
                'jour_id' =>1,
                'hm_debut' =>Carbon::createFromTime(16,15,00,"Africa/Abidjan")->toTimeString(),
                'duree_H' =>1,
                'duree_M' =>null,
                'classe_id'=>19,
                'matiere_id'=>11,
                'annee_scolaire_id'=>1
            ],
            // mardi
            [
                'jour_id' =>2,
                'hm_debut' =>Carbon::createFromTime(8,05,00,"Africa/Abidjan")->toTimeString(),
                'duree_H' =>4,
                'duree_M' =>null,
                'classe_id'=>19,
                'matiere_id'=>20,
                'annee_scolaire_id'=>1
            ],
            [
                'jour_id' =>2,
                'hm_debut' =>Carbon::createFromTime(13,05,00,"Africa/Abidjan")->toTimeString(),
                'duree_H' =>2,
                'duree_M' =>null,
                'classe_id'=>19,
                'matiere_id'=>6,
                'annee_scolaire_id'=>1
            ],
            [
                'jour_id' =>2,
                'hm_debut' =>Carbon::createFromTime(15,05,00,"Africa/Abidjan")->toTimeString(),
                'duree_H' =>1,
                'duree_M' =>null,
                'classe_id'=>19,
                'matiere_id'=>16,
                'annee_scolaire_id'=>1
            ],
            [
                'jour_id' =>2,
                'hm_debut' =>Carbon::createFromTime(16,05,00,"Africa/Abidjan")->toTimeString(),
                'duree_H' =>1,
                'duree_M' =>null,
                'classe_id'=>19,
                'matiere_id'=>19,
                'annee_scolaire_id'=>1
            ],
            // mercredi 
            [
                'jour_id' =>3,
                'hm_debut' =>Carbon::createFromTime(8,05,00,"Africa/Abidjan")->toTimeString(),
                'duree_H' =>2,
                'duree_M' =>null,
                'classe_id'=>19,
                'matiere_id'=>20,
                'annee_scolaire_id'=>1
            ],
            [
                'jour_id' =>3,
                'hm_debut' =>Carbon::createFromTime(10,05,00,"Africa/Abidjan")->toTimeString(),
                'duree_H' =>2,
                'duree_M' =>null,
                'classe_id'=>19,
                'matiere_id'=>3,
                'annee_scolaire_id'=>1
            ],
            [
                'jour_id' =>3,
                'hm_debut' =>Carbon::createFromTime(13,05,00,"Africa/Abidjan")->toTimeString(),
                'duree_H' =>4,
                'duree_M' =>null,
                'classe_id'=>19,
                'matiere_id'=>19,
                'annee_scolaire_id'=>1
            ],
            // jeudi
            [
                'jour_id' =>4,
                'hm_debut' =>Carbon::createFromTime(8,05,00,"Africa/Abidjan")->toTimeString(),
                'duree_H' =>4,
                'duree_M' =>null,
                'classe_id'=>19,
                'matiere_id'=>1,
                'annee_scolaire_id'=>1
            ],
            [
                'jour_id' =>4,
                'hm_debut' =>Carbon::createFromTime(13,05,00,"Africa/Abidjan")->toTimeString(),
                'duree_H' =>4,
                'duree_M' =>null,
                'classe_id'=>19,
                'matiere_id'=>3,
                'annee_scolaire_id'=>1
            ],
            // vendredi 
            [
                'jour_id' =>5,
                'hm_debut' =>Carbon::createFromTime(8,05,00,"Africa/Abidjan")->toTimeString(),
                'duree_H' =>2,
                'duree_M' =>null,
                'classe_id'=>19,
                'matiere_id'=>1,
                'annee_scolaire_id'=>1
            ],
            [
                'jour_id' =>5,
                'hm_debut' =>Carbon::createFromTime(10,15,00,"Africa/Abidjan")->toTimeString(),
                'duree_H' =>2,
                'duree_M' =>null,
                'classe_id'=>19,
                'matiere_id'=>2,
                'annee_scolaire_id'=>1
            ],
            [
                'jour_id' =>5,
                'hm_debut' =>Carbon::createFromTime(12,05,00,"Africa/Abidjan")->toTimeString(),
                'duree_H' =>2,
                'duree_M' =>null,
                'classe_id'=>19,
                'matiere_id'=>6,
                'annee_scolaire_id'=>1
            ],
            [
                'jour_id' =>5,
                'hm_debut' =>Carbon::createFromTime(13,15,00,"Africa/Abidjan")->toTimeString(),
                'duree_H' =>2,
                'duree_M' =>null,
                'classe_id'=>19,
                'matiere_id'=>13,
                'annee_scolaire_id'=>1
            ]
        ];
        DB::table('matiere_classetts')->insert($data);

    }
}
