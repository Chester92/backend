<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class AccesorisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $accesorios=[
            ['NombreAccesorio' => 'Accesorio 1','created_at' => now(), 'updated_at' => now()]
        ];
        DB::table('accesorios')->insert($accesorios);           
    }
}
