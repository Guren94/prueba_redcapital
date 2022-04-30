<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rol')->insert([
            'nombre_rol' => 'Administrador',
            'descripcion_rol' => 'Administrador del sistema',
        ]);
        DB::table('rol')->insert([
            'nombre_rol' => 'Funcionario',
            'descripcion_rol' => 'Funcionario del sistema',
        ]);
        DB::table('rol')->insert([
            'nombre_rol' => 'Usuario',
            'descripcion_rol' => 'Usuario del sistema',
        ]);
    }
}
