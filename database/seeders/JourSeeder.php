<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JourSeeder extends Seeder
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
            ['jour_name' => 'Lundi'],
            ['jour_name' => 'Mardi'],
            ['jour_name' => 'Mercredi'],
            ['jour_name' => 'Jeudi'],
            ['jour_name' => 'Vendredi']
        ];
        DB::table('jours')->insert($data);
    }
}
