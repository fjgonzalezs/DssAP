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

             
              $table->integer('idPeso_actitud')->unsigned();
             $table->foreign('idPeso_actitud')->references('idPeso_actitud')->on('pesos_actitudes');
            
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
