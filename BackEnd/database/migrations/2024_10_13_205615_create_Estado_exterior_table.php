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
        Schema::create('Estado_exterior', function (Blueprint $table) {
            $table->integer('ID_ESTADO_EXT');
            $table->string('DESCRIPCION', 180)->nullable();
            $table->integer('ID_ESTADO')->nullable();
            $table->integer('ID_CONDICION')->nullable();

            $table->primary(['ID_ESTADO_EXT'], 'xpkestado_exterior');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Estado_exterior');
    }
};
