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
        Schema::create('facturacions', function (Blueprint $table) {
            $table->id('nro_factura');
            $table->foreignId('reserva');
            $table->date('fecha_emision');
            $table->float('Total');
            $table->foreignId('metodo_pago');
            $table->foreign('reserva')->references('nro_reserva')->on('reservas');
            $table->foreign('metodo_pago')->references('id_metodo')->on('metodo_pagos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturacions');
    }
};
