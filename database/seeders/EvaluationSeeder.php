<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EvaluationSeeder extends Seeder
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
                'description_eval' => 'devoir de classe portant sur les 1 premiers chapitres',
                'coefficient_eval' => 1,
                'date_evaluation' => now()->format('Y-m-d'),
                'matiere_id' =>18,
                'periode_id' =>1,
                'classe_id' =>59,
                'created_at'=> now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),
                'type_evaluation_id'=>3,
                'notation'=>20,
                'duree' => 2,
                'heure_debut' => now()->format('H:i:s'),
                'evaluation_state'=> 1
            ]
        ];
        DB::table('evaluations')->insert($data);
    }
}
