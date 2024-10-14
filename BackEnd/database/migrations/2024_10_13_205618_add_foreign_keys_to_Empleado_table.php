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
        Schema::table('Empleado', function (Blueprint $table) {
            $table->foreign(['ID_PERSONA'], 'R_118')->references(['ID_PERSONA'])->on('Persona')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_DATO_EMPLEADO'], 'R_119')->references(['ID_DATO_EMPLEADO'])->on('Datos_Empleados_Empresa')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_DATOS_ACAD'], 'R_127')->references(['ID_DATOS_ACAD'])->on('Datos_Academicos')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_VIVIENDA'], 'R_129')->references(['ID_VIVIENDA'])->on('Datos_vivienda')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_DATOS_FAM'], 'R_130')->references(['ID_DATOS_FAM'])->on('Datos_Familiares')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Empleado', function (Blueprint $table) {
            $table->dropForeign('R_118');
            $table->dropForeign('R_119');
            $table->dropForeign('R_127');
            $table->dropForeign('R_129');
            $table->dropForeign('R_130');
        });
    }
};
