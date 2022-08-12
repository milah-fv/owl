<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransporteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transportes')->insert([
            [
            'operador' => 'Linner Manolo Bran',
            'placas_tracto' => 'C-450BQQ',
            'licencia' => '2822430460503',
            'caat' => '14BF',
            'nro_eco' => '9031788',
            'capacidad' => '53´',
            'placa_cajas' => 'TC-39BYL',
            'transporte_afianzador' => 'Transportes Shama',
            'codigo_aduanero' => 'No Aplica',
            ],
            [
            'operador' => 'Bismarck José Guevara Martinez',
            'placas_tracto' => 'CH 33267',
            'licencia' => '0811004860007W',
            'caat' => '3HB3',
            'nro_eco' => '3388',
            'capacidad' => '53 REF 3 EJES',
            'placa_cajas' => 'TC- 88BTZ',
            'transporte_afianzador' => 'MORENO SALAZAR',
            'codigo_aduanero' => 'NI06335',
            ],
        ]);
    }
}
