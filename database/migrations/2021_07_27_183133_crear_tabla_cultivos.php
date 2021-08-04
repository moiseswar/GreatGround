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

            $table->unsignedBigInteger('semilla_id');

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
