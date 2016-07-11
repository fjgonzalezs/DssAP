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
             $table->string('nombreActitud',100);
             $table->integer('totalActitud');
             
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
