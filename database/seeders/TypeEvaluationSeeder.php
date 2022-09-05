<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TypeEvaluationSeeder extends Seeder
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
            ['name_te'=>'INTERROGATION ECRITE'],
            ['name_te'=>'INTERROGATION ORALE'],
            ['name_te'=>'DEVOIR DE CLASSE'],
            ['name_te'=>'DEVOIR DE NIVEAU'],
            ['name_te'=>'EXPOSER'],
            ['name_te'=>'TRAVAIL DE RECHERCHE']
        ];
        DB::table('type_evaluations')->insert($data);
    }
}
