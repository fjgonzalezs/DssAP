<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaActitudesLocalidades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actitudes_localidades', function (Blueprint $table) {
            $table->increments('idActitudes_localidades');
            

             $table->integer('idActitud')->unsigned();
             $table->foreign('idActitud')->references('idActitud')->on('actitudes');

             $table->integer('idLocalidad')->unsigned();
             $table->foreign('idLocalidad')->references('idLocalidad')->on('localidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('actitudes_localidades');
    }
}
