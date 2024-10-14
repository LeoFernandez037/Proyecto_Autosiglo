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
        Schema::create('Estado', function (Blueprint $table) {
            $table->integer('ID_ESTADO');
            $table->string('DESCRIPCION_GENERAL', 180)->nullable();

            $table->primary(['ID_ESTADO'], 'xpkestado');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Estado');
    }
};
