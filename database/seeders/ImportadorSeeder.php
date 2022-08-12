<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImportadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('importadores')->insert([
            [
            'nombre' => 'Ocean Service, SA',
            'nit' => '82232946',
            'domicilio' => 'Calle 15 No. 3 Int 20, Edifcio Centro Ejecutivo oficina 106, Ciudad de Guatemala.',
            'contacto' => '-',
            'telefono' => '-',
            ],
        ]);
    }
}
