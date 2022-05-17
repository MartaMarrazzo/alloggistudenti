<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Possiede extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('possiede', function (Blueprint $table) {
            $table->bigIncrements('offerta');            
            $table->foreign('offerta')->references('id')->on('offerta');
            $table->string('tipo',30); 
            $table->foreign('tipo')->references('tipo')->on('servizi');
            $table->integer('quantita');
            $table->primary(array('offerta','tipo'))
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('possiede');
    }
}
