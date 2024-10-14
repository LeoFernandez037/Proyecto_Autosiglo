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
        Schema::table('Inventario', function (Blueprint $table) {
            $table->foreign(['ID_COMPRA'], 'R_70')->references(['ID_COMPRA'])->on('Compra')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_VENTA'], 'R_73')->references(['ID_VENTA'])->on('Venta')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Inventario', function (Blueprint $table) {
            $table->dropForeign('R_70');
            $table->dropForeign('R_73');
        });
    }
};
