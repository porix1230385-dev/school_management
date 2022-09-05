<?php

namespace Database\Seeders;

// use App\Helpers\UsersHelpers;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AnneeScolaireSeeder extends Seeder
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
            ['libelle_as' => '2022-2023']
        ];
        DB::table('annee_scolaires')->insert($data);
    }
}
