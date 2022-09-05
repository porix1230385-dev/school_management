<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EnseignantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            // ['matricule'=>strtoupper(Str::random(3)),'user_id' => 26],
            ['matricule'=>strtoupper(Str::random(3)),'user_id' => 17]
        ];
        DB::table('enseignants')->insert($data);
    }
}
