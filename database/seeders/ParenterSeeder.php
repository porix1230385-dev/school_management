<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ParenterSeeder extends Seeder
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
            ['parent_id'=>4,'eleve_id'=>6],
            ['parent_id'=>5,'eleve_id'=>7],
            ['parent_id'=>6,'eleve_id'=>8],
            ['parent_id'=>6,'eleve_id'=>4],
            ['parent_id'=>6,'eleve_id'=>5]
        ];
        DB::table('parenters')->insert($data);
    }
}
