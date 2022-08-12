<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpresaTransporteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empresa_transporte')->insert([
            [
            'nombre' => 'RICSER',
            'domicilio' => 'Av. 4 de Julio No. 455 Ote, Cd. Juarez, Durnago CP 35180 (antes Villa Juarez, Durango)',
            'contacto' => 'Ing. Ricardo Herrera',
            'telefono' => '871 774 0834, 871 347 7294',
            ],
            [
            'nombre' => 'BODEGA ISABEL',
            'domicilio' => 'Carretera Jaritas km 4.5 frente a Serasur.',
            'contacto' => 'Don Chaing',
            'telefono' => '962 699 3189',
            ],
            [
            'nombre' => 'Ocean Service, SA',
            'domicilio' => 'Km. 64 autopista Puerto Quetzl, Escuintla, Guatemala',
            'contacto' => 'Marvin Aguirre',
            'telefono' => '502 2296 5350',
            ],
        ]);
    }
}
