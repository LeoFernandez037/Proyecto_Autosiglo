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
        Schema::create('Peso_bruto', function (Blueprint $table) {
            $table->integer('ID_PESO_BRUTO');
            $table->string('DETALLE', 180)->nullable();
            $table->integer('ID_METRICAS')->nullable();

            $table->primary(['ID_PESO_BRUTO'], 'xpkpeso_bruto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Peso_bruto');
    }
};
