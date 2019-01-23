<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministratzaileakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administratzaileak', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('pasahitza');
            $table->tinyinteger('mota');
            $table->string('departamentua');
            $table->boolean('egoera');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('administratzaileak');
    }
}
