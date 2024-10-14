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
        Schema::create('Medidas', function (Blueprint $table) {
            $table->integer('ID_MEDIDA');
            $table->string('LARGO_TOTAL', 40)->nullable();
            $table->string('ANCHO_TOTAL', 40)->nullable();
            $table->string('ALTURA_TOTAL', 40)->nullable();
            $table->integer('ID_METRICAS')->nullable();

            $table->primary(['ID_MEDIDA'], 'xpkmedidas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Medidas');
    }
};
