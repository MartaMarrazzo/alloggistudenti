<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Interagisci extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {/*
        Schema::create('interagisce', function (Blueprint $table) {
            $table->bigIncrements('offerta');            
            $table->foreign('offerta')->references('id')->on('offerta');
            $table->string('utente');            
            $table->foreign('utente')->references('user')->on('utente');
            $table->date('data');            
            $table->string('tipo',10);            
           
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interagisce');
    }
}
