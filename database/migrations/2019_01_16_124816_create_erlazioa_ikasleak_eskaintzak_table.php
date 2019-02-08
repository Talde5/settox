<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateErlazioaIkasleakEskaintzakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('erlazioa', function (Blueprint $table) {
            $table->string('email');
            $table->integer('idEskaintzak')->unsigned();
            $table->timestamp('interes_Data');
            $table->primary(array('email', 'idEskaintzak'));
            $table->foreign('email')->references('email')->on('ikasleak')->onDelete('cascade');
            $table->foreign('idEskaintzak')->references('idEskaintzak')->on('eskaintzak')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('erlazioa');
    }
}
