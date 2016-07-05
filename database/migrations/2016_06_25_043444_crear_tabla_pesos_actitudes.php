<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPesosActitudes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesos_actitudes', function (Blueprint $table) {
            $table->increments('idPeso_actitud');
            $table->integer('puntajePeso');

             $table->integer('idTotal_peso')->unsigned();
             $table->foreign('idTotal_peso')->references('idTotal_peso')->on('totales_pesos');


            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pesos_actitudes');
    }
}
