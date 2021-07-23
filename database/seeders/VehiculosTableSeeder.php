<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class VehiculosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vehiculos=[
            [
                'Placa' => 'RK-1415',
                'IdMarca' => 1,
                'IdModelo' => 1,
                'IdTipo' => 1,
                'Compra' => now(),
                'Color' => 'rojo',
                'NumAsientos' => 15,
                'Kilometraje' => 5000,
                'FVencimientoSeguro' => now(),
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];
        DB::table('vehiculos')->insert($vehiculos);
    }
}
