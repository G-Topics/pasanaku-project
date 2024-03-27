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
        Schema::create('invitacion', function (Blueprint $table) {
            $table->integer('id')->unsigned()->primary();
            $table->date('fecha');
            $table->string('nombre');
            $table->integer('telefono');
            $table->string('email');
            $table->foreignId('id_participante')->constrained('participante');
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
        Schema::dropIfExists('invitacion');
    }
};
