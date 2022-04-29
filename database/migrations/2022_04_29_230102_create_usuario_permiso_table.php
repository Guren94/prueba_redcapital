<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioPermisoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_permiso', function (Blueprint $table) {
            $table->bigIncrements('id_usuario_permiso');
            $table->bigInteger('fk_id_usuario')->unsigned();
            $table->foreign('fk_id_usuario')->references('id')->on('users');
            $table->bigInteger('fk_id_permiso')->unsigned();
            $table->foreign('fk_id_permiso')->references('id_permiso')->on('permiso');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_permiso');
    }
}
