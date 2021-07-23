<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class VehiculosAccesoriosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vehiculosaccesorios=[
            [
                'IdVehiculo' => 1,
                'IdAccesorio' => 1,
                'Estado' => true,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];
        DB::table('vehiculosaccesorios')->insert($vehiculosaccesorios);        
    }
}
