<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VersementSeeder extends Seeder
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
            //(id_versement BIGINT, lib_versement VARCHAR(50), montant CURRENCY, #id_eleve, #id_anneescolaire);
            [
                'lib_versement'=>'PREMIER VERSEMENT',
                'montant_versement'=> 95000,
                'versement_max'=>4,
                'eleve_id' => 1,
                'annee_scolaire_id'=>1
            ],
            [
                'lib_versement'=>'PREMIER VERSEMENT',
                'montant_versement'=> 95000,
                'versement_max'=>4,
                'eleve_id' => 2,
                'annee_scolaire_id'=>1
            ],
            [
                'lib_versement'=>'PREMIER VERSEMENT',
                'montant_versement'=> 120000,
                'versement_max'=>5,
                'eleve_id' => 3,
                'annee_scolaire_id'=> 1
            ]
        ];
        DB::table('versements')->insert($data);
    }
}
