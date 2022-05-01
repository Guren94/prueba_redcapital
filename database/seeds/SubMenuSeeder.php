<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SubMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu1 = DB::table('menu')->where('nombre_menu','=','Cargar Archivo')->get('id_menu');
        $menu2 = DB::table('menu')->where('nombre_menu','=','Historico')->get('id_menu');
        $permiso1 = DB::table('permiso')->where('nombre_permiso','=','Cargar Archivo Admin')->get('id_permiso');
        $permiso2 = DB::table('permiso')->where('nombre_permiso','=','Cargar Archivo User')->get('id_permiso');
        $permiso3 = DB::table('permiso')->where('nombre_permiso','=','Ver Historico Admin')->get('id_permiso');
        $permiso4 = DB::table('permiso')->where('nombre_permiso','=','Ver Historico')->get('id_permiso');
        DB::table('sub_menu')->insert([
            'nombre_sub_menu' => 'Cargar Archivo: Administrador',
            'descripcion_sub_menu' => 'Carga archivos al sistema',
            'fk_id_menu' => $menu1[0]->id_menu,
            'fk_id_permiso' => $permiso1[0]->id_permiso,
            'ruta_sub_menu' => 'archivo.create',
        ]);
        DB::table('sub_menu')->insert([
            'nombre_sub_menu' => 'Cargar Archivo: Usuario',
            'descripcion_sub_menu' => 'Carga archivos al sistema',
            'fk_id_menu' => $menu1[0]->id_menu,
            'fk_id_permiso' => $permiso2[0]->id_permiso,
            'ruta_sub_menu' => 'archivo.create',
        ]);
        DB::table('sub_menu')->insert([
            'nombre_sub_menu' => 'Historico del Sistema',
            'descripcion_sub_menu' => 'Historico completo del sistema',
            'fk_id_menu' => $menu2[0]->id_menu,
            'fk_id_permiso' => $permiso3[0]->id_permiso,
            'ruta_sub_menu' => 'archivo.index',
        ]);
        DB::table('sub_menu')->insert([
            'nombre_sub_menu' => 'Mi Historico',
            'descripcion_sub_menu' => 'Historico del usuario o funcionario',
            'fk_id_menu' => $menu2[0]->id_menu,
            'fk_id_permiso' => $permiso4[0]->id_permiso,
            'ruta_sub_menu' => 'archivo.index',
        ]);
    }
}
