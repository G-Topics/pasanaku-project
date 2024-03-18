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
        Schema::create('ronda', function (Blueprint $table) {
            $table->integer('id')->unsigned()->primary();
            $table->integer('monto');
            $table->foreignId('IDganador')->constrained('participante');
            $table->foreignId('IDpartida')->constrained('partida');
            $table->date('vencimiento');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ronda');
    }
};
