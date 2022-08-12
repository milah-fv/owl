<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estados')->insert([
            [
            'estado' => 'Recolección',
            ],
            [
            'estado' => 'En Tránsito',
            ],
            [
            'estado' => 'En Maniobras',
            ],
            [
            'estado' => 'Despacho Aduanal',
            ],
            [
            'estado' => 'Destino Final',
            ],
            [
            'estado' => 'Servicio Finalizado',
            ],

        ]);
    }
}
