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
        Schema::table('Venta', function (Blueprint $table) {
            $table->foreign(['ID_EMPLEADO'], 'R_125')->references(['ID_EMPLEADO'])->on('Empleado')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_RECIBO'], 'R_72')->references(['ID_RECIBO'])->on('Recibo')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_TIPO_PAGO'], 'R_82')->references(['ID_SUB_INVENTARIO'])->on('Sub_Parametricas_Inventario')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_UNIDAD_MONEDA'], 'R_84')->references(['ID_SUB_INVENTARIO'])->on('Sub_Parametricas_Inventario')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_CLIENTE'], 'R_89')->references(['ID_CLIENTE'])->on('Cliente')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Venta', function (Blueprint $table) {
            $table->dropForeign('R_125');
            $table->dropForeign('R_72');
            $table->dropForeign('R_82');
            $table->dropForeign('R_84');
            $table->dropForeign('R_89');
        });
    }
};
