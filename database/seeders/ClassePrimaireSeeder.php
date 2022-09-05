<?php

namespace Database\Seeders;


// use Carbon\Carbon;
use App\Helpers\UsersHelpers;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClassePrimaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Carbon::now()->format('d-m-Y')
        // $date = Carbon::now();
        //$date = date_create("2021/10/27");
        $data = [
            [
                'annee' => UsersHelpers::getAnneeEnCour(),
                'instituteur_id' => 5,
                'classe_id' => 26 ],

            [
                'annee' => UsersHelpers::getAnneeEnCour(),
                'instituteur_id' => 6,
                'classe_id'=> 37
            ]
        ];
        DB::table('classe_primaires')->insert($data);

    }
}
