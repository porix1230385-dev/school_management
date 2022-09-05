<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClasseSecondaireSeeder extends Seeder
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
            ['classe_id'=>38],
            ['classe_id'=>39],
            ['classe_id'=>40],
            ['classe_id'=>41],
            ['classe_id'=>42],
            ['classe_id'=>43],
            ['classe_id'=>44],
            ['classe_id'=>45],
            ['classe_id'=>46],
            ['classe_id'=>47],
            ['classe_id'=>48],
            ['classe_id'=>49],
            ['classe_id'=>50],
            ['classe_id'=>51],
            ['classe_id'=>52],
            ['classe_id'=>53],
            ['classe_id'=>54],
            ['classe_id'=>55],
            ['classe_id'=>56],
            ['classe_id'=>57],
            ['classe_id'=>59],
            ['classe_id'=>60],
            ['classe_id'=>61],
            ['classe_id'=>62],
            ['classe_id'=>63],
            ['classe_id'=>64]

        ];
        DB::table('classe_secondaires')->insert($data);
    }
}
