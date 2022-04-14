<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefaccionTelefono extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_tel', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nota','45');
            $table->string('marca_ref','45');
            $table->string('modelo_ref','45');
            $table->unsignedInteger('id_ref');
            $table->foreign('id_ref')->references('id')->on('refaccion');
            $table->unsignedInteger('id_tel');
            $table->foreign('id_tel')->references('id')->on('telefono');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_tel');
    }
}
