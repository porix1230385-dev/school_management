<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NiveauSeeder extends Seeder
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
            // ['libelle_niveau'=>'CP1','cycle_id'=>1],
            // ['libelle_niveau'=>'CP2','cycle_id'=>1],
            // ['libelle_niveau'=>'CE1','cycle_id'=>1],
            // ['libelle_niveau'=>'CE2','cycle_id'=>1],
            // ['libelle_niveau'=>'CM1','cycle_id'=>1],
            // ['libelle_niveau'=>'CM2','cycle_id'=>1],
            // ['libelle_niveau'=>'6EME','cycle_id'=>2],
            // ['libelle_niveau'=>'5EME','cycle_id'=>2],
            ['libelle_niveau'=>'3EME','cycle_id'=>2],
            // ['libelle_niveau'=>'2ND','cycle_id'=>3],
            // ['libelle_niveau'=>'1ERE','cycle_id'=>3],
            // ['libelle_niveau'=>'TLE','cycle_id'=>3]
        ];
        DB::table('niveaux')->insert($data);
    }
}
