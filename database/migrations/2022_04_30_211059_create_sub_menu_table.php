<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_menu', function (Blueprint $table) {
            $table->bigIncrements('id_sub_menu');
            $table->string('nombre_sub_menu');
            $table->string('descripcion_sub_menu')->nullable();
            $table->bigInteger('fk_id_menu')->unsigned();
            $table->foreign('fk_id_menu')->references('id_menu')->on('menu');
            $table->bigInteger('fk_id_permiso')->unsigned();
            $table->foreign('fk_id_permiso')->references('id_permiso')->on('permiso');
            $table->string('ruta_sub_menu');
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
        Schema::dropIfExists('sub_menu');
    }
}
