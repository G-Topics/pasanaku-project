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
        Schema::create('detalle_invitacion_estado', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->foreignId('id_estado_invitacion')->constrained('estado_invitacion');
            $table->foreignId('id_invitacion')->constrained('invitacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_invitacion_estado');
    }
};
