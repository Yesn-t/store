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
        DB::table('categorias')->insert(['nombre_categoria' => 'personal']);
        DB::table('categorias')->insert(['nombre_categoria' => 'escuela']);

        Categoria::create(['nombre_categoria' => 'trabajo']);
    }
}
