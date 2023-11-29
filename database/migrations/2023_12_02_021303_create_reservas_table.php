<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id('nro_reserva');
            $table->foreignId('cliente');
            $table->foreignId('habitacion');
            $table->date('fecha_entrada');
            $table->date('fecha_salida');
            $table->string('estado');
            $table->foreign('cliente')->references('id_cliente')->on('clientes');
            $table->foreign('habitacion')->references('nro_habitacion')->on('habitacions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
