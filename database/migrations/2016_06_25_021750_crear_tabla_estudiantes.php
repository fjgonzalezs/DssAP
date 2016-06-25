<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaEstudiantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->increments('idEstudiante');
            $table->string('nombreEstudiante',45);
            $table->string('apellidoEstudiante',45);
            $table->string('cedulaEstudiante',10)->unique();
            $table->string('emailEstudiante',45)->unique();
            $table->string('telefonoEstudiante',20);
            $table->string('domicilioEstudiante',45);
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
        
            Schema::drop('estudiantes');
        
    }
}
