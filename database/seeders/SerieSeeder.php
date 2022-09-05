<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SerieSeeder extends Seeder
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
            ['serie_name'=>'A', 'cycle_id'=>3],
            ['serie_name'=>'B','cycle_id'=>3],
            ['serie_name'=>'C', 'cycle_id'=>3],
            ['serie_name'=>'D', 'cycle_id'=>3],
            ['serie_name'=>'E', 'cycle_id'=>3]
        ];

        DB::table('series')->insert($data);
    }
}
