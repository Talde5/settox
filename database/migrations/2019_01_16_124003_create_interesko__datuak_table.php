<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntereskoDatuakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interesko_Datuak', function (Blueprint $table) {
            
            $table->string('email')->primary();
            $table->string('lan_Esperientzia');
            $table->boolean('gida_Baimena');
            $table->boolean('kotxea');
            $table->string('erabilgarritasuna');
            $table->text('zure_Deskripzioa');
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
        Schema::dropIfExists('interesko_Datuak');
    }
}
