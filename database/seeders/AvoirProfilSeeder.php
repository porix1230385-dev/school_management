<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AvoirProfilSeeder extends Seeder
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
            ['profil_id'=> 4,'user_id' => 20],
            ['profil_id'=> 4,'user_id' => 21],
            ['profil_id'=> 4,'user_id' => 22],
            ['profil_id'=> 4,'user_id' => 23],
            ['profil_id'=> 3,'user_id' => 24],
            ['profil_id'=> 3,'user_id' => 25],
            ['profil_id'=> 2,'user_id' => 24],// user_id 24 a 02 profils parent et enseignant
            ['profil_id'=> 1,'user_id' => 25],// user_id 25 a 02 profils parent et instituteur
            ['profil_id'=> 2,'user_id' => 26],
            ['profil_id'=> 2,'user_id' => 27],
            ['profil_id'=> 1,'user_id' => 28],
            ['profil_id'=> 1,'user_id' => 29],
            ['profil_id'=> 8,'user_id' => 30],
            ['profil_id'=> 8,'user_id' => 31],
            ['profil_id'=> 7,'user_id' => 32],
            ['profil_id'=> 9,'user_id' => 33]
        ];
        DB::table('avoir_profils')->insert($data);
    }
}
