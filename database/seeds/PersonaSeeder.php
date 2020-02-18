<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personas')->insert([
            'nombre' => 'Rafael Julian Pedraza',
            'tipo_documento' => 'DNI',
            'num_documento' => '333666999',
            'direccion' => 'calle 123',
            'telefono' => '643115566',
            'email' => 'mail@mail.com',
        ]);

        DB::table('personas')->insert([
            'nombre' => 'Carla Perez',
            'tipo_documento' => 'DNI',
            'num_documento' => '12353124112',
            'direccion' => 'carrera 123',
            'telefono' => '99876465',
            'email' => 'carpe@mail.com',
        ]);

        DB::table('personas')->insert([
            'nombre' => 'Maria Juarez',
            'tipo_documento' => 'DNI',
            'num_documento' => '55345123',
            'direccion' => 'avenida 123',
            'telefono' => '313546491',
            'email' => 'maju@mail.com',
        ]);

        DB::table('personas')->insert([
            'nombre' => 'Productos Plásticos S.A.',
            'tipo_documento' => 'DNI',
            'num_documento' => '111222333',
            'direccion' => 'Diagonal Industrial',
            'telefono' => '5689741',
            'email' => 'pppu@mail.com',
        ]);

        DB::table('personas')->insert([
            'nombre' => 'MAXI Distribuciones',
            'tipo_documento' => 'DNI',
            'num_documento' => '444555666',
            'direccion' => 'avenida industrial',
            'telefono' => '3216549870',
            'email' => 'maxi@mail.com',
        ]);
    }
}
