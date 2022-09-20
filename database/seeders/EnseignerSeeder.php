<?php

namespace Database\Seeders;

use App\Helpers\UsersHelpers;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EnseignerSeeder extends Seeder
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
                'annee_enseigner'=>UsersHelpers::getAnneeEnCour(),
                'enseignant_id' =>9,
                'classe_secondaire_id' =>42,
                'matiere_id'=>12
            ],
            [
                'annee_enseigner'=>UsersHelpers::getAnneeEnCour(),
                'enseignant_id' =>9,
                'classe_secondaire_id' =>15,
                'matiere_id'=>12
            ],
            [
                'annee_enseigner'=>UsersHelpers::getAnneeEnCour(),
                'enseignant_id' =>9,
                'classe_secondaire_id' =>18,
                'matiere_id'=>12
            ],
            [
                'annee_enseigner'=>UsersHelpers::getAnneeEnCour(),
                'enseignant_id' =>9,
                'classe_secondaire_id' =>16,
                'matiere_id'=>12
            ],
            [
                'annee_enseigner'=>UsersHelpers::getAnneeEnCour(),
                'enseignant_id' =>9,
                'classe_secondaire_id' =>17,
                'matiere_id'=>12
            ],
            [
                'annee_enseigner'=>UsersHelpers::getAnneeEnCour(),
                'enseignant_id' =>9,
                'classe_secondaire_id' =>19,
                'matiere_id'=>12
            ],
            // [
            //     'annee_enseigner'=>UsersHelpers::getAnneeEnCour(),
            //     'enseignant_id' =>13,
            //     'classe_secondaire_id' =>15,
            //     'matiere_id'=>11
            // ],
            // [
            //     'annee_enseigner'=>UsersHelpers::getAnneeEnCour(),
            //     'enseignant_id' =>13,
            //     'classe_secondaire_id' =>18,
            //     'matiere_id'=>11
            // ],
            // [
            //     'annee_enseigner'=>UsersHelpers::getAnneeEnCour(),
            //     'enseignant_id' =>13,
            //     'classe_secondaire_id' =>16,
            //     'matiere_id'=>11
            // ],
            // [
            //     'annee_enseigner'=>UsersHelpers::getAnneeEnCour(),
            //     'enseignant_id' =>13,
            //     'classe_secondaire_id' =>17,
            //     'matiere_id'=>11
            // ],
            // [
            //     'annee_enseigner'=>UsersHelpers::getAnneeEnCour(),
            //     'enseignant_id' =>13,
            //     'classe_secondaire_id' =>19,
            //     'matiere_id'=>11
            // ],
            // [
            //     'annee_enseigner'=>UsersHelpers::getAnneeEnCour(),
            //     'enseignant_id' =>8,
            //     'classe_secondaire_id' =>41,
            //     'matiere_id'=>16
            // ],
            // [
            //     'annee_enseigner'=>UsersHelpers::getAnneeEnCour(),
            //     'enseignant_id' =>2,
            //     'classe_secondaire_id' =>20,
            //     'matiere_id'=> 2
            // ],
            // [
            //     'annee_enseigner'=>UsersHelpers::getAnneeEnCour(),
            //     'enseignant_id' =>2,
            //     'classe_secondaire_id' =>19,
            //     'matiere_id'=> 10
            // ],
            // [   
            //     'annee_enseigner'=>UsersHelpers::getAnneeEnCour(),
            //     'enseignant_id' =>2,
            //     'classe_secondaire_id' =>18,
            //     'matiere_id'=> 10
            // ],
        ];
         DB::table('enseigners')->insert($data);
    }
}
