<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MarcasTableSeeder::class);
        $this->call(ModelosTableSeeder::class);
        $this->call(TipossTableSeeder::class);
        $this->call(AccesorisTableSeeder::class);  
        $this->call(VehiculosTableSeeder::class); 
        $this->call(VehiculosAccesoriosSeeder::class);                               
    }
}
