<?php

namespace Database\Seeders;

// use App\Helpers\UsersHelpers;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InscrireSeeder extends Seeder
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
                'date_inscription'=>date('Y-m-d H:i:s'),
                'montant_inscription'=>95000,
                'eleve_id'=>8,
                'annee_scolaire_id' => 1,
                'classe_id'=>26
            ],
            [
                'date_inscription'=>date('Y-m-d H:i:s'),
                'montant_inscription'=>58000,
                'eleve_id'=>4,
                'annee_scolaire_id' => 1,
                'classe_id'=>62
            ],
            [
                'date_inscription'=>date('Y-m-d H:i:s'),
                'montant_inscription'=>120000,
                'eleve_id'=>5,
                'annee_scolaire_id' => 1,
                'classe_id'=>59
            ],
            [
                'date_inscription'=>date('Y-m-d H:i:s'),
                'montant_inscription'=>120000,
                'eleve_id'=>6,
                'annee_scolaire_id' => 1,
                'classe_id'=>59
            ],
            [
                'date_inscription'=>date('Y-m-d H:i:s'),
                'montant_inscription'=>120000,
                'eleve_id'=>7,
                'annee_scolaire_id' => 1,
                'classe_id'=>26
            ]
        ];
        DB::table('inscrires')->insert($data);
    }
}
