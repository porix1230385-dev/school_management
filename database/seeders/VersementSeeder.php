<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VersementSeeder extends Seeder
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
            [
                'lib_vers'=>'1er VERSEMENT'],
            [
                'lib_vers'=>'2eme VERSEMENT'],
            [
                'lib_vers'=>'3eme VERSEMENT'],
            [
                'lib_vers'=>'4eme VERSEMENT'],
            [
                'lib_vers'=>'5eme VERSEMENT']
           
        ];
        DB::table('versements')->insert($data);
    }
}
