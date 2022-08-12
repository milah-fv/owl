<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExportadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exportadores')->insert([
            [
            'nombre' => 'INGENIERIA APLICADA EN MANEJO DE MATERIALES SA DE CV',
            'rfc' => 'IAM990111DGA',
            'domicilio' => 'Juan Ignacio Maute 124, Col. Arcos Sur, Guadalajara Jalisco cp. 44150',
            'contacto' => 'Zoraya Lopez',
            'telefono' => '-',
            ],
        ]);
    }
}
