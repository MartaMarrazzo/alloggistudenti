<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contratto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratto', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->date('data');
            $table->String('locatore');
            $table->foreign('locatore')->references('user')->on('utente');
            $table->String('locatario');
            $table->foreign('locatario')->references('user')->on('utente');
            $table->String('offerta');
            $table->foreign('offerta')->references('id')->on('offerta');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contratto');
    }
}
