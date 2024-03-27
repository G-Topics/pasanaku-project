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
        Schema::create('cuenta', function (Blueprint $table) {
            $table->integer('id')->unsigned()->primary();
            $table->string('nrocuenta');
            $table->foreignId('id_moneda')->constrained('moneda');
            $table->unsignedBigInteger('ci_jugador');
            $table->foreign('ci_jugador')
            ->references('ci')
            ->on('jugador')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuenta');
    }
};
