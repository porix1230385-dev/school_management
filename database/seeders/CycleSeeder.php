<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CycleSeeder extends Seeder
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
            ['libelle_cycle' => 'primaire'],
            ['libelle_cycle' => 'secondaire premier cycle'],     
            ['libelle_cycle' => 'secondaire second cycle']     
        ];
        DB::table('cycles')->insert($data);
    }
}
