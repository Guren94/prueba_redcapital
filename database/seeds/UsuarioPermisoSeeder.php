<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsuarioPermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = DB::table('users')->where('name','=','Maria Gonzales')->get('id');
        $user2 = DB::table('users')->where('name','=','Juan Gabi')->get('id');
        $user3 = DB::table('users')->where('name','=','Pedro Perez')->get('id');
        $user4 = DB::table('users')->where('name','=','Elisa Valdivia')->get('id');
        $permiso1 = DB::table('permiso')->where('nombre_permiso','=','Cargar Archivo Admin')->get('id_permiso');
        $permiso2 = DB::table('permiso')->where('nombre_permiso','=','Cargar Archivo User')->get('id_permiso');
        $permiso3 = DB::table('permiso')->where('nombre_permiso','=','Ver Historico Admin')->get('id_permiso');
        $permiso4 = DB::table('permiso')->where('nombre_permiso','=','Ver Historico')->get('id_permiso');
        DB::table('usuario_permiso')->insert([
            'fk_id_usuario' => $user1[0]->id,
            'fk_id_permiso' => $permiso1[0]->id_permiso,
        ]);
        DB::table('usuario_permiso')->insert([
            'fk_id_usuario' => $user1[0]->id,
            'fk_id_permiso' => $permiso3[0]->id_permiso,
        ]);
        DB::table('usuario_permiso')->insert([
            'fk_id_usuario' => $user2[0]->id,
            'fk_id_permiso' => $permiso1[0]->id_permiso,
        ]);
        DB::table('usuario_permiso')->insert([
            'fk_id_usuario' => $user3[0]->id,
            'fk_id_permiso' => $permiso4[0]->id_permiso,
        ]);
        DB::table('usuario_permiso')->insert([
            'fk_id_usuario' => $user4[0]->id,
            'fk_id_permiso' => $permiso2[0]->id_permiso,
        ]);
        DB::table('usuario_permiso')->insert([
            'fk_id_usuario' => $user4[0]->id,
            'fk_id_permiso' => $permiso4[0]->id_permiso,
        ]);
    }
}
