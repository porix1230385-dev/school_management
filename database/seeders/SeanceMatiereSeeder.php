<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeanceMatiereSeeder extends Seeder
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
                'titre_seance'=>'Comportements, mouvement et système nerveux',
                'detail_seance'=>'Les réflexes',
                'matiere_id'=>'10',
                'date_seance' => now(),
                'nbr_heure_seance' => 4,
                'classe_id' => 25
            ]
        ];
    }
}
