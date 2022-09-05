<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PeriodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // $periodes = [
        //     'PREMIER TRIMESTRE' => ['debut' => '2022-09-19','fin' =>'2022-12-23'],
        //     'DEUXIEME TRIMESTRE' => ['debut' => '2023-01-04','fin' =>'2022-04-12'],
        //     'TROISIEME TRIMESTRE' => ['debut' => '2023-04-16','fin' =>'2022-06-12']
        // ];

        $data = [
            [
                'libelle_periode'=>'PREMIER TRIMESTRE',
                'debut_periode' => '2022-09-19',
                'fin_periode'   => '2022-12-23',
                'annee_scolaire_id' =>1
            ],
            [
                'libelle_periode'=>'DEUXIEME TRIMESTRE',
                'debut_periode' => '2023-01-04',
                'fin_periode'   => '2023-04-12',
                'annee_scolaire_id' =>1
            ],
            [
                'libelle_periode'=>'TROISIEME TRIMESTRE',
                'debut_periode' => '2023-04-16',
                'fin_periode'   => '2023-06-12',
                'annee_scolaire_id' =>1
            ],
        ];
        DB::table('periodes')->insert($data);
    }
}
