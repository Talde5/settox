<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfila', function (Blueprint $table) {
            
            $table->string('email')->primary();
            $table->string('dni');
            $table->string('izena');
            $table->string('apellidos');
            $table->timestamp('jaiotze_Data');
            $table->string('helbidea');
            $table->string('kontaktua');
            $table->foreign('email')->references('email')->on('ikasleak')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfila');
    }
}
