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
        Schema::create('Aduana', function (Blueprint $table) {
            $table->integer('ID_ADUANA');
            $table->dateTime('FECHA_INGRESO')->nullable();
            $table->integer('ID_UNIDAD')->nullable();
            $table->string('ARANCEL', 80)->nullable();
            $table->integer('ID_METRICAS')->nullable();
            $table->string('PESO', 20)->nullable();

            $table->primary(['ID_ADUANA'], 'xpkaduana');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Aduana');
    }
};
