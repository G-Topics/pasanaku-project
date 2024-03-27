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
        Schema::create('falta', function (Blueprint $table) {
            $table->id();
            $table->integer('n_dias');
            $table->date('fecha');
            $table->foreignId('id_participante')->constrained('participante');
            $table->foreignId('id_ronda')->constrained('ronda');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('falta');
    }
};
