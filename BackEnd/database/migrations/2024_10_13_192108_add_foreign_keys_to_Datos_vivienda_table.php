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
        Schema::table('Datos_vivienda', function (Blueprint $table) {
            $table->foreign(['ID_DEPARTAMENTO'], 'R_109')->references(['ID_SUB_PERSONA'])->on('Sub_Parametricas_Persona')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_TIPO_VIVIENDA'], 'R_110')->references(['ID_SUB_PERSONA'])->on('Sub_Parametricas_Persona')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Datos_vivienda', function (Blueprint $table) {
            $table->dropForeign('R_109');
            $table->dropForeign('R_110');
        });
    }
};
