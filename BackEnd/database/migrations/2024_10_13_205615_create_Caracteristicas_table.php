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
        Schema::create('Caracteristicas', function (Blueprint $table) {
            $table->integer('ID_CARACTERISTICA');
            $table->string('TRANSMISION', 20)->nullable();
            $table->string('SUSPENSION_DELANTERA', 20)->nullable();
            $table->string('SUSPENSION_TRASERA', 20)->nullable();
            $table->string('FRENOS_DELANTEROS', 20)->nullable();
            $table->string('FRENOS_TRASEROS', 20)->nullable();
            $table->integer('ID_PESO_BRUTO')->nullable();
            $table->integer('ID_ESTADO')->nullable();
            $table->integer('ID_DEPOSITO_COMBUSTIBLE')->nullable();
            $table->integer('ID_CAPACIDAD')->nullable();
            $table->integer('ID_MEDIDA')->nullable();
            $table->integer('ID_PLAZAS')->nullable();

            $table->primary(['ID_CARACTERISTICA'], 'xpkcaracteristicas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Caracteristicas');
    }
};
