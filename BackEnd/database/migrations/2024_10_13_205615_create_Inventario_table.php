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
        Schema::create('Inventario', function (Blueprint $table) {
            $table->integer('ID_INVENTARIO');
            $table->integer('ID_COMPRA')->nullable();
            $table->integer('ID_VENTA')->nullable();
            $table->integer('INGRESO')->nullable();
            $table->integer('EGRESO')->nullable();
            $table->integer('SALDO')->nullable();

            $table->primary(['ID_INVENTARIO'], 'xpkinventario');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Inventario');
    }
};
