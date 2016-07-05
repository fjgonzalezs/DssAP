<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaNotas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
           $table->increments('idNota');
           $table->decimal('segundoNota',6, 3);
           $table->decimal('terceroNota',6, 3);
           $table->decimal('cuartoNota',6, 3);
           $table->decimal('quintoNota',6, 3);
           $table->decimal('sextoNota',6, 3);
           $table->decimal('septimoNota',6, 3);
           $table->decimal('octavoNota',6, 3);
           $table->decimal('novenoNota',6, 3);
           $table->decimal('decimoNota',6, 3);
           $table->decimal('primeroBNota',6, 3);
           $table->decimal('segundoBNota',6, 3);
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
        
             Schema::drop('notas');
        
    }
}
