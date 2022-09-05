<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoteSeeder extends Seeder
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
                'notation'=>11.5,
                'appreciation'=>null,
                'evaluation_id'=>3,
                'eleve_id'=>5,
                'created_at'=>now()->format('Y-m-d H:i:s'),
                'updated_at'=>now()->format('Y-m-d H:i:')
            ]
        ];
        DB::table('notes')->insert($data);
    }
}
