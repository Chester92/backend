<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class TipossTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipos=[
            ['NombreTipo' => 'tipo 1','created_at' => now(), 'updated_at' => now()],
        ];
        DB::table('tipos')->insert($tipos);
    }
}
