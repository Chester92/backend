<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class ModelosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modelos=[
            ['NombreModelo' => 'modelo 1','created_at' => now(), 'updated_at' => now()]
        ];
        DB::table('modelos')->insert($modelos);
    }
}
