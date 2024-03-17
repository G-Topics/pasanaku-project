<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participante', function (Blueprint $table) {
            $table->integer('id')->unsigned()->primary();
            $table->unsignedBigInteger('CIjugador');
            $table->foreign('CIjugador')
            ->references('ci')
            ->on('jugador')
            ->onDelete('cascade');
            $table->foreignId('IDrol')->constrained('rol');
            $table->foreignId('IDpartida')->constrained('partida');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participante');
    }
};
