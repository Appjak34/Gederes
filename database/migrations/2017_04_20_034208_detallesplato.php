<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Detallesplato extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallesplato', function(Blueprint $tabla){
            $tabla->increments('id_detalles');
            $tabla->integer('platillo')->unsigned();
            $tabla->foreign('platillo')->references('id_platillo')->on('platillo')->OnDelete('cascade');
            $tabla->integer('ingredientes')->unsigned();
            $tabla->foreign('ingredientes')->references('id_ingrediente')->on('ingredientes')->OnDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('detallesplato');
    }
}
