<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
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
            ['type' => 'current_session', 'description' => '2022-2023'],
            ['type' => 'system_title', 'description' => 'CJIA'],
            ['type' => 'system_name', 'description' => 'CJ INSPIRED ACADEMY'],
            ['type' => 'term_ends', 'description' => '7/10/2018'],
            ['type' => 'term_begins', 'description' => '7/10/2018'],
            ['type' => 'phone', 'description' => '0123456789'],
            ['type' => 'address', 'description' => '18B North Central Park, Behind Central Square Tourist Center'],
            ['type' => 'system_email', 'description' => 'cjacademy@cj.com'],
            ['type' => 'alt_email', 'description' => ''],
            ['type' => 'email_host', 'description' => ''],
            ['type' => 'email_pass', 'description' => ''],
            ['type' => 'lock_exam', 'description' => 0],
            ['type' => 'logo', 'description' => ''],
            ['type' => 'next_term_fees_p', 'description' => '20000'],
            ['type' => 'next_term_fees_pc', 'description' => '25600'],
            ['type' => 'next_term_fees_s', 'description' => '30600'],
        ];
        DB::table('settings')->insert($data);
    }
}
