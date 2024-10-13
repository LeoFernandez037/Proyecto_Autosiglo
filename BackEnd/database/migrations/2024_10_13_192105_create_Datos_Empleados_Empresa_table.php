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
        Schema::create('Datos_Empleados_Empresa', function (Blueprint $table) {
            $table->integer('ID_DATO_EMPLEADO');
            $table->string('DESCRIPCION', 20)->nullable();
            $table->integer('SALARIO')->nullable();

            $table->primary(['ID_DATO_EMPLEADO'], 'xpkdatos_empleados');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Datos_Empleados_Empresa');
    }
};
