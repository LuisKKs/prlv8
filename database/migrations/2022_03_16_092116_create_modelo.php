<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelo', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('modelo', '45');
            $table->unsignedInteger('id_marca');
            $table->foreign('id_marca')->references('id')->on('marca');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modelo');
    }
}
