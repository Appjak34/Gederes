<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Orden extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden', function(Blueprint $table){
            $table->increments('id_orden');
            $table->dateTime('fecha');
            $table->string('comentarios');
            $table->string('estatus');
            $table->string('cliente', 100);
            $table->foreign('cliente')->references('login')->on('usuarios')->OnDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orden');
    }
}
