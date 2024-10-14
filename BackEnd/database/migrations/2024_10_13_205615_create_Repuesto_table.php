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
        Schema::create('Repuesto', function (Blueprint $table) {
            $table->integer('ID_REPUESTO');
            $table->string('DESCRIPCION', 180)->nullable();
            $table->integer('ID_MARCA')->nullable();
            $table->integer('ID_TIPO_REPUESTO')->nullable();
            $table->integer('ID_MODELO')->nullable();

            $table->primary(['ID_REPUESTO'], 'xpkrepuesto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Repuesto');
    }
};
