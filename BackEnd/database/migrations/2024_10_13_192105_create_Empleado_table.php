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
        Schema::create('Empleado', function (Blueprint $table) {
            $table->integer('ID_EMPLEADO');
            $table->integer('ID_PERSONA')->nullable();
            $table->dateTime('FECHA_INICIO')->nullable();
            $table->dateTime('FECHA_FIN')->nullable();
            $table->integer('ID_DATO_EMPLEADO')->nullable();
            $table->integer('ID_DATOS_ACAD')->nullable();
            $table->integer('ID_VIVIENDA')->nullable();
            $table->integer('ID_DATOS_FAM')->nullable();
            $table->integer('ID_SEGURO_PERSONA')->nullable();

            $table->primary(['ID_EMPLEADO'], 'xpkempleado');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Empleado');
    }
};
