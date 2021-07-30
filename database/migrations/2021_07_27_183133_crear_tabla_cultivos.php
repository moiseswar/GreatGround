<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaCultivos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Cultivos', function (Blueprint $table) {
            $table->id()->increments('id');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('semilla_id');
            $table->foreign('semilla_id')->references('id')->on('semillas')->onDelete('cascade');

            $table->string('nombre');
            $table->integer('cantidad');
            $table->text('comentarios')->nullable()->default('Se inicio Cultivo');
            $table->integer('tiempo');
            $table->integer('estado')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Cultivos');
    }
}
