<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Inoltra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {/*
        Schema::create('inoltra', function (Blueprint $table) {
            $table->bigIncrements('messaggio');            
            $table->foreign('messaggio')->references('id')->on('messaggio');
            $table->string('mittente');            
            $table->foreign('mittente')->references('user')->on('utente');
            $table->string('destinatario');            
            $table->foreign('destinatario')->references('user')->on('utente');
            
        });/*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inoltra');
    }
}
