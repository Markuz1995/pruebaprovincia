<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ciudades')->insert([
            'descripcion' => 'La Plata',
            'provincia_id' => 1,
        ]);

        DB::table('ciudades')->insert([
            'descripcion' => 'Córdoba',
            'provincia_id' => 2,
        ]);
    }
}
