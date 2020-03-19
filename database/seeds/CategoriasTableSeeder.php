<?php

use App\Categoria;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // No usar DB o lo menos posible
        DB::table('categorias')->insert(['nombre_categoria' => 'Personal']);
        DB::table('categorias')->insert(['nombre_categoria' => 'Escuela']);

        Categoria::create(['nombre_categoria' => 'Trabajo']);
    }
}