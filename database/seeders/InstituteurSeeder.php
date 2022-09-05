<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InstituteurSeeder extends Seeder
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
            ['matricule_instituteur'=>strtoupper(Str::random(3)),'user_id' => 28],
            ['matricule_instituteur'=>strtoupper(Str::random(3)),'user_id' => 29]
        ];
        DB::table('instituteurs')->insert($data);
    }
}
