<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaLocalidades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('localidades', function (Blueprint $table) {
            $table->increments('idLocalidad');
             $table->string('nombreLocalidad',45);

               $table->integer('idActitud')->unsigned();
             $table->foreign('idActitud')->references('idActitud')->on('actitudes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
           Schema::drop('localidades');
        
    }
}
