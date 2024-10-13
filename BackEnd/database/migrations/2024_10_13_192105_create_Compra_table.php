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
        Schema::create('Compra', function (Blueprint $table) {
            $table->integer('ID_COMPRA');
            $table->dateTime('FECHA_COMPRA')->nullable();
            $table->integer('CANTIDAD')->nullable();
            $table->integer('MONTO_UNIDAD')->nullable();
            $table->integer('MONTO_TOTAL')->nullable();
            $table->integer('ID_PROVEEDOR')->nullable();
            $table->integer('ID_TIPO_PAGO')->nullable();
            $table->integer('ID_UNIDAD_MONEDA')->nullable();

            $table->primary(['ID_COMPRA'], 'xpkcompra');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Compra');
    }
};
