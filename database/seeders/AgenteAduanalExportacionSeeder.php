<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgenteAduanalExportacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agente_ad_exportacion')->insert([
            [
            'nombre' => 'LODECOMEX',
            'nit' => '-',
            'domicilio' => '-',
            'contacto' => 'OSIRIS CARDENAS',
            'telefono' => '962 698 0119',
            ],
        ]);
    }
}
