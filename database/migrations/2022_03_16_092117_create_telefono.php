<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTelefono extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefono', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger('id_modelo');
            $table->foreign('id_modelo')->references('id')->on('modelo');
            $table->string('numero_modelo','45');
            $table->string('procesador', '20');
            $table->string('memoria_int', '20');
            $table->string('memoria_ram', '20');
            $table->string('cam_prin', '20');
            $table->string('cam_frontal', '20');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('telefono');
    }
}
