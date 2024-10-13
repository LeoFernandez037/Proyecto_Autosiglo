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
        Schema::table('Datos_Academicos', function (Blueprint $table) {
            $table->foreign(['ID_GRADO_ACADEMICO'], 'R_120')->references(['ID_SUB_PERSONA'])->on('Sub_Parametricas_Persona')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_INSTITUCION_ACADEMICA'], 'R_121')->references(['ID_SUB_PERSONA'])->on('Sub_Parametricas_Persona')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_DEPARTAMENTO'], 'R_122')->references(['ID_SUB_PERSONA'])->on('Sub_Parametricas_Persona')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Datos_Academicos', function (Blueprint $table) {
            $table->dropForeign('R_120');
            $table->dropForeign('R_121');
            $table->dropForeign('R_122');
        });
    }
};
