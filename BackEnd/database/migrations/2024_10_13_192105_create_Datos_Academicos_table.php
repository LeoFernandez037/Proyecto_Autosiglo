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
        Schema::create('Datos_Academicos', function (Blueprint $table) {
            $table->integer('ID_DATOS_ACAD');
            $table->integer('ID_GRADO_ACADEMICO')->nullable();
            $table->string('DESCRIPCION', 180)->nullable();
            $table->integer('ID_INSTITUCION_ACADEMICA')->nullable();
            $table->dateTime('AÑO_EGRESO')->nullable();
            $table->integer('ID_DEPARTAMENTO')->nullable();

            $table->primary(['ID_DATOS_ACAD'], 'xpkdatos_academicos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Datos_Academicos');
    }
};
