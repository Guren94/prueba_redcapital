<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert([
            'nombre_menu' => 'Cargar Archivo',
            'descripcion_menu' => 'Carga archivos al sistema',
        ]);
        DB::table('menu')->insert([
            'nombre_menu' => 'Historico',
            'descripcion_menu' => 'Historial de archivos en el sistema',
        ]);
    }
}
