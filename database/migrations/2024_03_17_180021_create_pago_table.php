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
        Schema::create('pago', function (Blueprint $table) {
            $table->integer('id')->unsigned()->primary();
            $table->date('fecha');
            $table->integer('monto');
            $table->foreignId('IDCuentaOrigen')->constrained('cuenta');
            $table->foreignId('IDCuentaDestino')->constrained('cuenta');
            $table->foreignId('IDCuota')->constrained('cuota');
            $table->foreignId('IDparticipante')->constrained('participante');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pago');
    }
};
