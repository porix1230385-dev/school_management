<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProfilSeeder extends Seeder
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
            // ['lib_profil'=>'instituteur'],
            // ['lib_profil'=>'enseignant'],
            // ['lib_profil'=>'parent'],
            // ['lib_profil'=>'eleve'],
            // ['lib_profil'=>'personnel_school'],
            // ['lib_profil'=>'school_admin'],
            // ['lib_profil'=>'super_admin'],
            // ['lib_profil'=>'comptable']
        ];
        DB::table('profils')->insert($data);
    }
}
