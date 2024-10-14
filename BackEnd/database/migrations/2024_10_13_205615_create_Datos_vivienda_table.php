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
        Schema::create('Datos_vivienda', function (Blueprint $table) {
            $table->integer('ID_VIVIENDA');
            $table->string('DIRECCION', 160)->nullable();
            $table->integer('ID_DEPARTAMENTO')->nullable();
            $table->integer('ID_TIPO_VIVIENDA')->nullable();

            $table->primary(['ID_VIVIENDA'], 'xpkdatos_vivienda');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Datos_vivienda');
    }
};
