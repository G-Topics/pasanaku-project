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
            $table->foreignId('IDparticipante')->constrained('participante');
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
        Schema::dropIfExists('invitacion');
    }
};
