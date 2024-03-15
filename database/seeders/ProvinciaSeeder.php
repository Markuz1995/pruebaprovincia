<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('provincias')->insert([
            'descripcion' => 'Buenos Aires',
        ]);

        DB::table('provincias')->insert([
            'descripcion' => 'Córdoba',
        ]);
    }
}
