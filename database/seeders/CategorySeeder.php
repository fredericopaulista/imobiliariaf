<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'category' => 'Lançamento'
        ]);
        DB::table('categories')->insert([
            'category' => 'Aluguel'
        ]);
        DB::table('categories')->insert([
            'category' => 'Venda'
        ]);
        DB::table('categories')->insert([
            'category' => 'Permuta'
        ]);
    }
}
