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
        Schema::table('Caracteristicas', function (Blueprint $table) {
            $table->foreign(['ID_ESTADO'], 'R_31')->references(['ID_ESTADO'])->on('Estado')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_DEPOSITO_COMBUSTIBLE'], 'R_32')->references(['ID_DEPOSITO_COMBUSTIBLE'])->on('Deposito_combustible')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_PESO_BRUTO'], 'R_33')->references(['ID_PESO_BRUTO'])->on('Peso_bruto')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_CAPACIDAD'], 'R_34')->references(['ID_CAPACIDAD'])->on('Capacidad_carga')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_MEDIDA'], 'R_35')->references(['ID_MEDIDA'])->on('Medidas')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_PLAZAS'], 'R_48')->references(['ID_SUB'])->on('Sub_Parametricas_Producto')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Caracteristicas', function (Blueprint $table) {
            $table->dropForeign('R_31');
            $table->dropForeign('R_32');
            $table->dropForeign('R_33');
            $table->dropForeign('R_34');
            $table->dropForeign('R_35');
            $table->dropForeign('R_48');
        });
    }
};
