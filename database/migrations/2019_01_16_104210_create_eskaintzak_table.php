<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEskaintzakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eskaintzak', function (Blueprint $table) {
            $table->increments('idEskaintzak');
            $table->string('enpresa_Izena');
            $table->string('lan_Postua');
            $table->timestamp('hasierako_Data');
            $table->timestamp('amaierako_Data');
            $table->text('deskripzioa');
            $table->integer('plaza_Hutsak');
            $table->string('departamentua');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eskaintzak');
    }
}
