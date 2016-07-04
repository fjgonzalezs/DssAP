<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaActitudes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actitudes', function (Blueprint $table) {
             $table->increments('idActitud');
             $table->string('nombreActitud',45);
             
               $table->integer('idEstudiante')->unsigned();
             $table->foreign('idEstudiante')->references('idEstudiante')->on('estudiantes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       
             Schema::drop('actitudes');
        
    }
}
