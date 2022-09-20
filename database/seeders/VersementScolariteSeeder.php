<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VersementScolariteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $data = [
            [
                'versement_id'=>1,
                'montant'=>25000,
                'avance'=>NULL,
                'eleve_id'=>5,
                'annee_scolaire_id'=>1
            ],
            [
                'versement_id'=>1,
                'montant'=>50000,
                'avance'=>NULL,
                'eleve_id'=>4,
                'annee_scolaire_id'=>1
            ],
            [
                'versement_id'=>2,
                'montant'=>50000,
                'avance'=>NULL,
                'eleve_id'=>4,
                'annee_scolaire_id'=>1
            ],
            [
                'versement_id'=>3,
                'montant'=>30000,
                'avance'=>NULL,
                'eleve_id'=>4,
                'annee_scolaire_id'=>1
            ]
            
        ];
        DB::table('versement_scolarites')->insert($data);

    }
}
