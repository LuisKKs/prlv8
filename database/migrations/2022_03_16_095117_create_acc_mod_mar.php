<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccModMar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acc_mod', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nota','45');
            $table->string('marca_acc','45');
            $table->string('modelo_acc','45');
            $table->unsignedInteger('id_modelo');
            $table->foreign('id_modelo')->references('id')->on('modelo');
            $table->unsignedInteger('id_accesorio');
            $table->foreign('id_accesorio')->references('id')->on('accesorio');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acc_mod');
    }
}
