<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use App\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'nombre' => 'Aseo',
            'descripcion' => 'Todos los productos de aseo'
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Electrónica',
            'descripcion' => 'Todos los productos de aseo'
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Bebidas',
            'descripcion' => 'Todos los productos de aseo'
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Panadería',
            'descripcion' => 'Todos los de panadería y repostería'
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Embutidos',
            'descripcion' => 'Todos los productos carnicos'
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Ropa',
            'descripcion' => 'Toda la ropa'
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Automóvil',
            'descripcion' => 'Todos los productos de automoviles'
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Mascotas',
            'descripcion' => 'Todos los productos para mascotas'
        ]);

        // factory(Categoria::class,7)->create();
    }
}
