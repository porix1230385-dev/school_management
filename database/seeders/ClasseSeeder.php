<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClasseSeeder extends Seeder
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
            ['libelle_classe'=>'CP1 B','niveau_id'=>1],
            ['libelle_classe'=>'CP1 C','niveau_id'=>1],
            ['libelle_classe'=>'CP2 A','niveau_id'=>2],
            ['libelle_classe'=>'CP2 C','niveau_id'=>2],
            ['libelle_classe'=>'CE1 A','niveau_id'=>3],
            ['libelle_classe'=>'CE1 C','niveau_id'=>3],
            ['libelle_classe'=>'CE2 B','niveau_id'=>4],
            ['libelle_classe'=>'CE2 C','niveau_id'=>4],
            ['libelle_classe'=>'CM1 B','niveau_id'=>5],
            ['libelle_classe'=>'CM1 C','niveau_id'=>5],
            ['libelle_classe'=>'CM2 A','niveau_id'=>6],
            ['libelle_classe'=>'CM2 C','niveau_id'=>6],
            ['libelle_classe'=>'6ème2','niveau_id'=>7],
            ['libelle_classe'=>'6ème3','niveau_id'=>7],
            ['libelle_classe'=>'5ème1','niveau_id'=>8],
            ['libelle_classe'=>'5ème3','niveau_id'=>8],
            ['libelle_classe'=>'4ème2','niveau_id'=>9],
            ['libelle_classe'=>'4ème3','niveau_id'=>9],
            ['libelle_classe'=>'2nd C2','niveau_id'=>10],
            ['libelle_classe'=>'2nd C3','niveau_id'=>10],
            ['libelle_classe'=>'2nd A1','niveau_id'=>10],
            ['libelle_classe'=>'2nd A2','niveau_id'=>10],
            ['libelle_classe'=>'2nd A3','niveau_id'=>10],
            ['libelle_classe'=>'1ere D1','niveau_id'=>11],
            ['libelle_classe'=>'1ere D3','niveau_id'=>11],
            ['libelle_classe'=>'1ere C1','niveau_id'=>11],
            ['libelle_classe'=>'1ere C2','niveau_id'=>11],
            ['libelle_classe'=>'1ere C3','niveau_id'=>11],
            ['libelle_classe'=>'TLE D1','niveau_id'=>12],
            ['libelle_classe'=>'TLE D3','niveau_id'=>12],
            ['libelle_classe'=>'TLE A1','niveau_id'=>12],
            ['libelle_classe'=>'TLE A2','niveau_id'=>12],
            ['libelle_classe'=>'TLE A3','niveau_id'=>12],
            ['libelle_classe'=>'TLE C1','niveau_id'=>12],
            ['libelle_classe'=>'TLE C2','niveau_id'=>12],
            ['libelle_classe'=>'TLE C3','niveau_id'=>12],
            ['libelle_classe'=>'3EME 1','niveau_id'=>13],
            ['libelle_classe'=>'3EME 2','niveau_id'=>13],
            ['libelle_classe'=>'3EME 3','niveau_id'=>13],
          
        ];
        DB::table('classes')->insert($data);
    }
}
