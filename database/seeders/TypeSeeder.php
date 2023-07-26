<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('types')->insert([
            'type' => 'Casa'
        ]);
        DB::table('types')->insert([
            'type' => 'Apartamento'
        ]);
        DB::table('types')->insert([
            'type' => 'Terreno'
        ]);
        DB::table('types')->insert([
            'type' => 'Cobertura'
        ]);
        DB::table('types')->insert([
            'type' => 'Chácara'
        ]);
        DB::table('types')->insert([
            'type' => 'Sítio'
        ]);
        DB::table('types')->insert([
            'type' =>  'Fazenda'
        ]);
        DB::table('types')->insert([
            'type' => 'Sala Comercial'
        ]);
        DB::table('types')->insert([
            'type' => 'Loja Comercial'
        ]);

    }
}
