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
        Schema::create('partida', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('frecuencia');
            $table->date('fecha_inicio');
            $table->decimal('monto', 10, 2);
            $table->decimal('multa', 10, 2);
            $table->integer('capacidad');
            $table->string('descripcion');
            $table->foreignId('id_moneda')->constrained('moneda');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partida');
    }
};
