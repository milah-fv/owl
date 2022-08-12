<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgenteAduanalImportacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agente_ad_importacion')->insert([
            [
            'nombre' => 'Consolidados 807',
            'nit' => '-',
            'domicilio' => 'Ciudad de Guatemala',
            'contacto' => 'Santos Ralda',
            'telefono' => '502 5874 8912',
            ],
        ]);
    }
}
