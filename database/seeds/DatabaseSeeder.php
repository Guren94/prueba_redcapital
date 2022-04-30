<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $this->call(RolSeeder::class);
        $this->call(PermisoSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(UsuarioPermisoSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(SubMenuSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
