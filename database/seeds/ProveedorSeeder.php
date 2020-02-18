<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProveedorSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $persona = DB::table('personas')
        ->select('id')
        ->where(['nombre' => 'Productos Plásticos S.A.'])
        ->first();

        DB::table('proveedores')->insert([
            'id' => $persona->id,
            'contacto' => 'Patricia Caro',
            'telefono_contacto' => '321568740'
        ]);

        $persona = DB::table('personas')
        ->select('id')
        ->where(['nombre' => 'MAXI Distribuciones'])
        ->first();

        DB::table('proveedores')->insert([
            'id' => $persona->id,
            'contacto' => 'Alberto Rozo',
            'telefono_contacto' => '31789946541'
        ]);
    }
}
