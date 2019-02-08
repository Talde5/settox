<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHizkuntzaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hizkuntza', function (Blueprint $table) {
            $table->string('email');
            $table->string('hizkuntza');
            $table->string('maila');
            $table->primary(array('email', 'hizkuntza'));
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
        Schema::dropIfExists('hizkuntza');
    }
}
