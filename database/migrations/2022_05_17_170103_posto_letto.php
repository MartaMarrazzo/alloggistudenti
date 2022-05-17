<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PostoLetto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postoLetto', function (Blueprint $table) {
            $table->bigIncrements('offerta');            
            $table->foreign('offerta')->references('id')->on('offerta');
            $table->tinyInteger('posti_letto_appartamento');
            $table->tinyInteger('posti_letto_camera');
            $table->float('dimensioni_camera');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postoLetto');
    }
}
