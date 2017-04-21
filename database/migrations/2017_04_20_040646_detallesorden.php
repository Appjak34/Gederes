<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Detallesorden extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallesorden', function(Blueprint $tabla){
            $tabla->increments('id_detalles_orden');
            $tabla->integer('platillo')->unsigned();
            $tabla->foreign('platillo')->references('id_platillo')->on('platillo')->OnDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('detallesorden');
    }
}
