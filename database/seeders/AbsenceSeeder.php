<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AbsenceSeeder extends Seeder
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
                'motif'=>null,
                'justificatif'=>null,
                'seance_matiere_id'=>49,
                'eleve_id'=>5,
                'nbre_heure_absence'=>2,
                'absence_state'=>false,
               'periode_id'=>3
            ],
            [
                'motif'=>null,
                'justificatif'=>null,
                'seance_matiere_id'=>50,
                'eleve_id'=>5,
                'nbre_heure_absence'=>4,
                'absence_state'=>false,
               'periode_id'=>3
            ],
            [
                'motif'=>null,
                'justificatif'=>null,
                'seance_matiere_id'=>54,
                'eleve_id'=>4,
                'nbre_heure_absence'=>2,
                'absence_state'=>false,
               'periode_id'=>3
            ],
            [
                'motif'=>null,
                'justificatif'=>null,
                'seance_matiere_id'=>51,
                'eleve_id'=>4,
                'nbre_heure_absence'=>2,
                'absence_state'=>false,
               'periode_id'=>3
            ],
            [
                'motif'=>null,
                'justificatif'=>null,
                'seance_matiere_id'=>67,
                'eleve_id'=>5,
                'nbre_heure_absence'=>2,
                'absence_state'=>true,
               'periode_id'=>3
            ],
            [
                'motif'=>null,
                'justificatif'=>null,
                'seance_matiere_id'=>48,
                'eleve_id'=>5,
                'nbre_heure_absence'=>2,
                'absence_state'=>true,
               'periode_id'=>3
            ],
            [
                'motif'=>null,
                'justificatif'=>null,
                'seance_matiere_id'=>63,
                'eleve_id'=>2,
                'nbre_heure_absence'=>2,
                'absence_state'=>false,
               'periode_id'=>3
            ],
            [
                'motif'=>null,
                'justificatif'=>null,
                'seance_matiere_id'=>63,
                'eleve_id'=>2,
                'nbre_heure_absence'=>4,
                'absence_state'=>true,
               'periode_id'=>3
            ],
            [
                'motif'=>null,
                'justificatif'=>null,
                'seance_matiere_id'=>53,
                'eleve_id'=>3,
                'nbre_heure_absence'=>2,
                'absence_state'=>false,
               'periode_id'=>3
            ],
            [
                'motif'=>null,
                'justificatif'=>null,
                'seance_matiere_id'=>54,
                'eleve_id'=>3,
                'nbre_heure_absence'=>2,
                'absence_state'=>false,
               'periode_id'=>3
            ],
            [
                'motif'=>null,
                'justificatif'=>null,
                'seance_matiere_id'=>49,
                'eleve_id'=>6,
                'nbre_heure_absence'=>2,
                'absence_state'=>false,
               'periode_id'=>3
            ],
            [
                'motif'=>null,
                'justificatif'=>null,
                'seance_matiere_id'=>50,
                'eleve_id'=>6,
                'nbre_heure_absence'=>2,
                'absence_state'=>false,
               'periode_id'=>3
            ],
            [
                'motif'=>null,
                'justificatif'=>null,
                'seance_matiere_id'=>67,
                'eleve_id'=>6,
                'nbre_heure_absence'=>2,
                'absence_state'=>false,
               'periode_id'=>3
            ],
            [
                'motif'=>null,
                'justificatif'=>null,
                'seance_matiere_id'=>68,
                'eleve_id'=>6,
                'nbre_heure_absence'=>2,
                'absence_state'=>false,
               'periode_id'=>3
            ]
        ];
        DB::table('absences')->insert($data);
    }
}
