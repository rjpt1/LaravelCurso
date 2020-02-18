<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
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
        ->where(['nombre' => 'Rafael Julian Pedraza'])
        ->first();

        DB::table('users')->insert([
            'id' => $persona->id,
            'usuario' => 'rjpt',
            'password' => '$2y$10$HRUAAUGxKv8tyI7YNTVtBuuJz8TzuFGgUuibVQqt9OL50yIZC.wxu',
            'idrol' => '1'
        ]);

        $persona = DB::table('personas')
        ->select('id')
        ->where(['nombre' => 'Maria Juarez'])
        ->first();

        DB::table('users')->insert([
            'id' => $persona->id,
            'usuario' => 'vendedor',
            'password' => '$2y$10$RSAPcsaqR6OdWex4G9bZduQReb0wP0oq8Mxzs.LSqHD17ORmp4RZu',
            'idrol' => '2'
        ]);

        $persona = DB::table('personas')
        ->select('id')
        ->where(['nombre' => 'Carla Perez'])
        ->first();

        DB::table('users')->insert([
            'id' => $persona->id,
            'usuario' => 'almacenero',
            'password' => '$2y$10$0a0s0602kiKwW5JOc6wu2ucFAFzQw8qWx106ANyN.nJWM1PTcWLMm',
            'idrol' => '3'
        ]);
    }
}
