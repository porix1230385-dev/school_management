<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EstEnseignerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                'jour' => null,//date('d'),//
                'annee' =>null, 
                'duree' => null, 
                'heure_debut' =>null, 
                'coeficient' => 2,
                'nbr_heure_total' => 30, 
                'estEnseigner_state' => true, 
                'niveau_id' => 12,
               'matiere_id' => 18,
            ]
            // [
            //     'jour' => null,//date('d'),//
            //     'annee' =>null, 
            //     'duree' => null, 
            //     'heure_debut' =>null, 
            //     'coeficient' => 1,
            //     'nbr_heure_total' => 30, 
            //     'estEnseigner_state' => true, 
            //     'niveau_id' => 2,
            //    'matiere_id' => 20,
            // ],
            // [
            //     'jour' => null,//date('d'),//
            //     'annee' =>null, 
            //     'duree' => null, 
            //     'heure_debut' =>null, 
            //     'coeficient' => 1,
            //     'nbr_heure_total' => 30, 
            //     'estEnseigner_state' => true, 
            //     'niveau_id' => 3,
            //    'matiere_id' => 20,
            // ],
            // [
            //     'jour' => null,//date('d'),//
            //     'annee' =>null, 
            //     'duree' => null, 
            //     'heure_debut' =>null, 
            //     'coeficient' => 1,
            //     'nbr_heure_total' => 30, 
            //     'estEnseigner_state' => true, 
            //     'niveau_id' => 4,
            //    'matiere_id' => 20,
            // ],
            // [
            //     'jour' => null,//date('d'),//
            //     'annee' =>null, 
            //     'duree' => null, 
            //     'heure_debut' =>null, 
            //     'coeficient' => 1,
            //     'nbr_heure_total' => 30, 
            //     'estEnseigner_state' => true, 
            //     'niveau_id' => 5,
            //    'matiere_id' => 20,
            // ],
            // [
            //     'jour' => null,//date('d'),//
            //     'annee' =>null, 
            //     'duree' => null, 
            //     'heure_debut' =>null, 
            //     'coeficient' => 1,
            //     'nbr_heure_total' => 30, 
            //     'estEnseigner_state' => true, 
            //     'niveau_id' => 6,
            //    'matiere_id' => 20,
            // ],
            // [
            //     'jour' => null,//date('d'),//
            //     'annee' =>null, 
            //     'duree' => null, 
            //     'heure_debut' =>null, 
            //     'coeficient' => 1,
            //     'nbr_heure_total' => 30, 
            //     'estEnseigner_state' => true, 
            //     'niveau_id' => 7,
            //    'matiere_id' => 20,
            // ],
            // [
            //     'jour' => null,//date('d'),//
            //     'annee' =>null, 
            //     'duree' => null, 
            //     'heure_debut' =>null, 
            //     'coeficient' => 1,
            //     'nbr_heure_total' => 30, 
            //     'estEnseigner_state' => true, 
            //     'niveau_id' => 8,
            //    'matiere_id' => 20,
            // ],
            // [
            //     'jour' => null,//date('d'),//
            //     'annee' =>null, 
            //     'duree' => null, 
            //     'heure_debut' =>null, 
            //     'coeficient' => 1,
            //     'nbr_heure_total' => 30, 
            //     'estEnseigner_state' => true, 
            //     'niveau_id' => 9,
            //    'matiere_id' => 20,
            // ]
            // [
            //     'jour' => null,//date('d'),//
            //     'annee' =>null, 
            //     'duree' => null, 
            //     'heure_debut' =>null, 
            //     'coeficient' => 1,
            //     'nbr_heure_total' => 30, 
            //     'estEnseigner_state' => true, 
            //     'niveau_id' => 10,
            //    'matiere_id' => 20,
            // ],
            // [
            //     'jour' => null,//date('d'),//
            //     'annee' =>null, 
            //     'duree' => null, 
            //     'heure_debut' =>null, 
            //     'coeficient' => 1,
            //     'nbr_heure_total' => 30, 
            //     'estEnseigner_state' => true, 
            //     'niveau_id' => 11,
            //    'matiere_id' => 20,
            // ],
            // [
            //     'jour' => null,//date('d'),//
            //     'annee' =>null, 
            //     'duree' => null, 
            //     'heure_debut' =>null, 
            //     'coeficient' => 1,
            //     'nbr_heure_total' => 30, 
            //     'estEnseigner_state' => true, 
            //     'niveau_id' => 12,
            //    'matiere_id' => 20,
            // ],
        ];
        DB::table('est_enseigners')->insert($data);
    }
}
