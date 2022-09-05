<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MatiereSeeder extends Seeder
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
            ['nom_matiere'=>'EDUCATION PHYSIQUE ET SPORTIVE','abreviation'=>'EPS'],
            ['nom_matiere'=>'PHYSIQUE CHIMIE','abreviation'=>'PC'],
            ['nom_matiere'=>'ESPAGNOL','abreviation'=>'ESP'],
            ['nom_matiere'=>'ALLEMAND','abreviation'=>'ALL'],
            ['nom_matiere'=>'ARTS PLASTIQUES','abreviation'=>NULL],
            ['nom_matiere'=>'EDUCATION AU DROIT DE L\'HOMME ET À LA CITOYENNETE','abreviation'=>'EDHC'],
            ['nom_matiere'=>'EDUCATION MUSICALE','abreviation'=>NULL],
            ['nom_matiere'=>'PHILOSOPHIE','abreviation'=>NULL],   
            ['nom_matiere'=>'SCIENCE ET TECHNOLOGIE','abreviation'=>NULL],   
            ['nom_matiere'=>'ACTIVITES D\'EXPRESSION ET DE CREATION','abreviation'=>'AEC'],   
        ];
        DB::table('matieres')->insert($data);
    }
}
