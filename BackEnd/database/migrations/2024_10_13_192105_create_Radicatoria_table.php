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
        Schema::create('Radicatoria', function (Blueprint $table) {
            $table->integer('ID_RADICATORIA');
            $table->string('NUM_MATRICULA', 20)->nullable();
            $table->string('PROCEDENCIA', 20)->nullable();
            $table->integer('ID_DEPARTAMENTO')->nullable();

            $table->primary(['ID_RADICATORIA'], 'xpkradicatoria');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Radicatoria');
    }
};
