<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class MarcasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $marcas=[
            ['NombreMarca' => 'Nissan','created_at' => now(), 'updated_at' => now()]
        ];
        DB::table('marcas')->insert($marcas);
    }
}
