<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTitulazioaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titulazioa', function (Blueprint $table) {
            $table->string('email');
            $table->string('titulazio_Izena');
            $table->primary(array('email', 'titulazio_Izena'));
            $table->foreign('email')->references('email')->on('users')->where('rol',2)->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('titulazioa');
    }
}
