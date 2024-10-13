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
        Schema::create('Sub_Parametricas_Persona', function (Blueprint $table) {
            $table->integer('ID_SUB_PERSONA');
            $table->integer('ID_PARAMETRICA')->nullable();
            $table->string('DESCRIPCION', 180)->nullable();

            $table->primary(['ID_SUB_PERSONA'], 'xpksub_parametricas_persona');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Sub_Parametricas_Persona');
    }
};
