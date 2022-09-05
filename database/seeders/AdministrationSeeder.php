<?php

namespace Database\Seeders;

use App\Helpers\UsersHelpers;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdministrationSeeder extends Seeder
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
            ['fonction'=>UsersHelpers::getAdminFonction(),'user_id' => 9]
        ];
        DB::table('administrations')->insert($data);
    }
}
