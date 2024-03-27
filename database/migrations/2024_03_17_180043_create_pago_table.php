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
            $table->string('descripcion');
            $table->foreignId('id_cuenta_origen')->constrained('cuenta');
            $table->foreignId('id_centa_destino')->constrained('cuenta');
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
        Schema::dropIfExists('pago');
    }
};
