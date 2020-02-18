<?php

use Illuminate\Database\Seeder;

class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria = DB::table('categorias')
        ->select('id')
        ->where(['nombre' => 'Aseo'])
        ->first();

        DB::table('articulos')->insert([
          'idcategoria' => $categoria->id,
          'codigo' => '77065461604',
          'nombre' => 'Jabón',
          'precio_venta' => '2000',
          'stock' => '16',
          'descripcion' => 'Jabón de baño',
        ]);

        $categoria = DB::table('categorias')
        ->select('id')
        ->where(['nombre' => 'Bebidas'])
        ->first();

        DB::table('articulos')->insert([
          'idcategoria' => $categoria->id,
          'codigo' => '7708494654',
          'nombre' => 'Coca Cola 2lt',
          'precio_venta' => '3000',
          'stock' => '25',
          'descripcion' => 'Presentación de 2 litros',
        ]);

        $categoria = DB::table('categorias')
        ->select('id')
        ->where(['nombre' => 'Bebidas'])
        ->first();

        DB::table('articulos')->insert([
          'idcategoria' => $categoria->id,
          'codigo' => '7708494654',
          'nombre' => 'Coca Cola',
          'precio_venta' => '1500',
          'stock' => '25',
          'descripcion' => 'Presentación personal',
        ]);

        $categoria = DB::table('categorias')
        ->select('id')
        ->where(['nombre' => 'Panaderia'])
        ->first();

        DB::table('articulos')->insert([
          'idcategoria' => $categoria->id,
          'codigo' => '654064064',
          'nombre' => 'Pan aliñado',
          'precio_venta' => '1000',
          'stock' => '5',
          'descripcion' => 'pan de harina de trigo',
        ]);

        $categoria = DB::table('categorias')
        ->select('id')
        ->where(['nombre' => 'Embutidos'])
        ->first();

        DB::table('articulos')->insert([
          'idcategoria' => $categoria->id,
          'codigo' => '97906540',
          'nombre' => 'Jamón',
          'precio_venta' => '5500',
          'stock' => '22',
          'descripcion' => 'Marca Pietran',
        ]);

        $categoria = DB::table('categorias')
        ->select('id')
        ->where(['nombre' => 'Mascotas'])
        ->first();

        DB::table('articulos')->insert([
          'idcategoria' => $categoria->id,
          'codigo' => '77056464096409',
          'nombre' => 'Comida',
          'precio_venta' => '10000',
          'stock' => '2',
          'descripcion' => 'Presentación de 1kg',
        ]);
    }
}
