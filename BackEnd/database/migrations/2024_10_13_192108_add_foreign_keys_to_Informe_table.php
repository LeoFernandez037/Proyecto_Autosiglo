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
        Schema::table('Informe', function (Blueprint $table) {
            $table->foreign(['ID_PERSONA'], 'R_116')->references(['ID_PERSONA'])->on('Persona')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_SERVICIO'], 'R_86')->references(['ID_SERVICIO'])->on('Servicios')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_TIPO_INFORME'], 'R_87')->references(['ID_TIPO_INFORME'])->on('Tipo_informe')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_INVENTARIO'], 'R_88')->references(['ID_INVENTARIO'])->on('Inventario')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Informe', function (Blueprint $table) {
            $table->dropForeign('R_116');
            $table->dropForeign('R_86');
            $table->dropForeign('R_87');
            $table->dropForeign('R_88');
        });
    }
};
