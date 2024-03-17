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
            $table->foreignId('IDmoneda')->constrained('moneda');
            $table->unsignedBigInteger('CIjugador');
            $table->foreign('CIjugador')
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
