<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            'name' => 'Admin',
            'email' => 'owl@gmail.com',
            'password' => '$2y$10$W24LFXmAZj5wR1h/97RVJ.MBmJT3cwmaZ3xWcE08hfwy50WAwpk1G',
            'apellidos' => 'Admin',
            'celular' => '-',
            'cargo' => 'Administrador',
            'direccion' => '-',
            ],
        ]);
    }
}
