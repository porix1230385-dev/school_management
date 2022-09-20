<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SeanceMatiereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Carbon::createFromTime(8,00,00,"Africa/Abidjan")->toTimeString(),
        // ->toDateString();
        $data = [
            [
                'titre_seance'=>NULL,
                'detail_seance'=>NULL,
                'matiere_id'=>3,
                'date_seance' => Carbon::createFromDate(2023,04,10)->toDateString(),
                'nbr_heure_seance' => 4,
                'classe_id' => 59
            ],
            [
                'titre_seance'=>NULL,
                'detail_seance'=>NULL,
                'matiere_id'=>12,
                'date_seance' => Carbon::createFromDate(2023,04,10)->toDateString(),
                'nbr_heure_seance' => 4,
                'classe_id' => 59
            ],
            [
                'titre_seance'=>NULL,
                'detail_seance'=>NULL,
                'matiere_id'=>16,
                'date_seance' => Carbon::createFromDate(2023,04,10)->toDateString(),
                'nbr_heure_seance' => 2,
                'classe_id' => 62
            ],
            [
                'titre_seance'=>NULL,
                'detail_seance'=>NULL,
                'matiere_id'=>10,
                'date_seance' => Carbon::createFromDate(2023,04,11)->toDateString(),
                'nbr_heure_seance' => 4,
                'classe_id' => 25
            ],
            [
                'titre_seance'=>NULL,
                'detail_seance'=>NULL,
                'matiere_id'=>1,
                'date_seance' => Carbon::createFromDate(2023,04,11)->toDateString(),
                'nbr_heure_seance' => 4,
                'classe_id' => 25
            ],
            // EPS
            [
                'titre_seance'=>NULL,
                'detail_seance'=>NULL,
                'matiere_id'=>11,
                'date_seance' => Carbon::createFromDate(2023,04,16)->toDateString(),
                'nbr_heure_seance' => 2,
                'classe_id' => 25
            ],
            [
                'titre_seance'=>NULL,
                'detail_seance'=>NULL,
                'matiere_id'=>11,
                'date_seance' => Carbon::createFromDate(2023,04,17)->toDateString(),
                'nbr_heure_seance' => 2,
                'classe_id' => 20
            ],
            [
                'titre_seance'=>NULL,
                'detail_seance'=>NULL,
                'matiere_id'=>11,
                'date_seance' => Carbon::createFromDate(2023,04,17)->toDateString(),
                'nbr_heure_seance' => 2,
                'classe_id' => 22
            ],
            [
                'titre_seance'=>NULL,
                'detail_seance'=>NULL,
                'matiere_id'=>11,
                'date_seance' => Carbon::createFromDate(2023,04,18)->toDateString(),
                'nbr_heure_seance' => 2,
                'classe_id' => 23
            ],
            [
                'titre_seance'=>NULL,
                'detail_seance'=>NULL,
                'matiere_id'=>11,
                'date_seance' => Carbon::createFromDate(2023,04,19)->toDateString(),
                'nbr_heure_seance' => 1,
                'classe_id' => 26
            ],
            [
                'titre_seance'=>NULL,
                'detail_seance'=>NULL,
                'matiere_id'=>11,
                'date_seance' => Carbon::createFromDate(2023,05,19)->toDateString(),
                'nbr_heure_seance' => 1,
                'classe_id' => 14
            ],
            // END EPS
            // ANGLAIS
            [
                'titre_seance'=>NULL,
                'detail_seance'=>NULL,
                'matiere_id'=>2,
                'date_seance' => Carbon::createFromDate(2023,05,12)->toDateString(),
                'nbr_heure_seance' => 2,
                'classe_id' => 20
            ],
            [
                'titre_seance'=>NULL,
                'detail_seance'=>NULL,
                'matiere_id'=>10,
                'date_seance' => Carbon::createFromDate(2023,05,12)->toDateString(),
                'nbr_heure_seance' => 2,
                'classe_id' => 25
            ],
            [
                'titre_seance'=>NULL,
                'detail_seance'=>NULL,
                'matiere_id'=>12,
                'date_seance' => Carbon::createFromDate(2023,05,12)->toDateString(),
                'nbr_heure_seance' => 4,
                'classe_id' => 62
            ],
            [
                'titre_seance'=>NULL,
                'detail_seance'=>NULL,
                'matiere_id'=>12,
                'date_seance' => Carbon::createFromDate(2023,05,12)->toDateString(),
                'nbr_heure_seance' => 4,
                'classe_id' => 23
            ],
            [
                'titre_seance'=>NULL,
                'detail_seance'=>NULL,
                'matiere_id'=>3,
                'date_seance' => Carbon::createFromDate(2023,05,15)->toDateString(),
                'nbr_heure_seance' => 4,
                'classe_id' => 25
            ],
            [
                'titre_seance'=>NULL,
                'detail_seance'=>NULL,
                'matiere_id'=>3,
                'date_seance' => Carbon::createFromDate(2023,06,26)->toDateString(),
                'nbr_heure_seance' => 4,
                'classe_id' => 25
            ],
            [
                'titre_seance'=>NULL,
                'detail_seance'=>NULL,
                'matiere_id'=>19,
                'date_seance' => Carbon::createFromDate(2023    ,22)->toDateString(),
                'nbr_heure_seance' => 4,
                'classe_id' => 26
            ],
            [
                'titre_seance'=>NULL,
                'detail_seance'=>NULL,
                'matiere_id'=>18,
                'date_seance' => Carbon::createFromDate(2023,06,27)->toDateString(),
                'nbr_heure_seance' => 2,
                'classe_id' => 59
            ],
            [
                'titre_seance'=>NULL,
                'detail_seance'=>NULL,
                'matiere_id'=>3,
                'date_seance' => Carbon::createFromDate(2023,06,27)->toDateString(),
                'nbr_heure_seance' => 2,
                'classe_id' => 59
            ],
            [
                'titre_seance'=>null,
                'detail_seance'=>NULL,
                'matiere_id'=>10,
                'date_seance' => Carbon::createFromDate(2023,06,06)->toDateString(),
                'nbr_heure_seance' => 4,
                'classe_id' => 25
            ],
            [
                'titre_seance'=>null,
                'detail_seance'=>NULL,
                'matiere_id'=>20,
                'date_seance' => Carbon::createFromDate(2023,06,06)->toDateString(),
                'nbr_heure_seance' => 4,
                'classe_id' => 26
            ],
            [
                'titre_seance'=>NULL,
                'detail_seance'=>NULL,
                'matiere_id'=>20,
                'date_seance' => Carbon::createFromDate(2023,06,10)->toDateString(),
                'nbr_heure_seance' => 4,
                'classe_id' => 14
            ],
            [
                'titre_seance'=>NULL,
                'detail_seance'=>NULL,
                'matiere_id'=>3,
                'date_seance' => Carbon::createFromDate(2023,06,10)->toDateString(),
                'nbr_heure_seance' => 4,
                'classe_id' => 37
            ],
        ];
        DB::table('seance_matieres')->insert($data);
    }
}
