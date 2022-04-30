<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol1 = DB::table('rol')->where('nombre_rol','=','Administrador')->get('id_rol');
        $rol2 = DB::table('rol')->where('nombre_rol','=','Funcionario')->get('id_rol');
        $rol3 = DB::table('rol')->where('nombre_rol','=','Usuario')->get('id_rol');
        DB::table('users')->insert([
            'name' => 'Maria Gonzales',
            'email' => 'maria'.'@email.com',
            'password' => Hash::make('12345678'),
            'fk_id_rol' => $rol1[0]->id_rol,
        ]);
        DB::table('users')->insert([
            'name' => 'Juan Gabi',
            'email' => 'juan'.'@email.com',
            'password' => Hash::make('12345678'),
            'fk_id_rol' => $rol1[0]->id_rol,
        ]);
        DB::table('users')->insert([
            'name' => 'Pedro Perez',
            'email' => 'pedro'.'@email.com',
            'password' => Hash::make('12345678'),
            'fk_id_rol' => $rol2[0]->id_rol,
        ]);
        DB::table('users')->insert([
            'name' => 'Elisa Valdivia',
            'email' => 'elisa'.'@email.com',
            'password' => Hash::make('12345678'),
            'fk_id_rol' => $rol3[0]->id_rol,
        ]);
    }
}
