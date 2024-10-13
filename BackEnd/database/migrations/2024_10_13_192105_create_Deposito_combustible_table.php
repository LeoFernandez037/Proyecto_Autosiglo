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
        Schema::create('Deposito_combustible', function (Blueprint $table) {
            $table->integer('ID_DEPOSITO_COMBUSTIBLE');
            $table->string('DETALLE', 180)->nullable();
            $table->integer('ID_METRICAS')->nullable();

            $table->primary(['ID_DEPOSITO_COMBUSTIBLE'], 'xpkdeposito_combustible');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Deposito_combustible');
    }
};
