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
        Schema::create('Venta', function (Blueprint $table) {
            $table->integer('ID_VENTA');
            $table->integer('ID_RECIBO')->nullable();
            $table->dateTime('FECHA_VENTA')->nullable();
            $table->integer('CANTIDAD')->nullable();
            $table->integer('MONTO_UNIDAD')->nullable();
            $table->integer('MONTO_TOTAL')->nullable();
            $table->integer('ID_CLIENTE')->nullable();
            $table->integer('ID_EMPLEADO')->nullable();
            $table->integer('ID_TIPO_PAGO')->nullable();
            $table->integer('ID_UNIDAD_MONEDA')->nullable();

            $table->primary(['ID_VENTA'], 'xpkventa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Venta');
    }
};
