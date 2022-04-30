<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permiso')->insert([
            'nombre_permiso' => 'Cargar Archivo Admin',
            'descripcion_permiso' => 'Para uso del administrador',
        ]);
        DB::table('permiso')->insert([
            'nombre_permiso' => 'Cargar Archivo User',
            'descripcion_permiso' => 'Para uso del usuario',
        ]);
        DB::table('permiso')->insert([
            'nombre_permiso' => 'Ver Historico Admin',
            'descripcion_permiso' => 'Para uso del administrador',
        ]);
        DB::table('permiso')->insert([
            'nombre_permiso' => 'Ver Historico',
            'descripcion_permiso' => 'Para el uso del usuario y funcionario',
        ]);
    }
}
