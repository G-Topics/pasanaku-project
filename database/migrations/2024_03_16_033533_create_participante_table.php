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
            $table->unsignedBigInteger('ci_jugador');
            $table->foreign('ci_jugador')
            ->references('ci')
            ->on('jugador')
            ->onDelete('cascade');
            $table->foreignId('id_rol')->constrained('rol');
            $table->foreignId('id_partida')->constrained('partida');

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
