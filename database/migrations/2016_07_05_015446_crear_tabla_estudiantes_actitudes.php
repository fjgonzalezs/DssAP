<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaEstudiantesActitudes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes_actitudes', function (Blueprint $table) {
            $table->increments('idEstudiante_actitud');

            $table->integer('idEstudiante')->unsigned();
             $table->foreign('idEstudiante')->references('idEstudiante')->on('estudiantes');

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
        Schema::drop('estudiantes_actitudes');
    }
}
