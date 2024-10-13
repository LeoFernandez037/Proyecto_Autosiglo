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
        Schema::create('Cobertura', function (Blueprint $table) {
            $table->integer('ID_COBERTURA');
            $table->string('DESCRIPCION', 180)->nullable();
            $table->integer('COSTO')->nullable();

            $table->primary(['ID_COBERTURA'], 'xpkcobertura');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Cobertura');
    }
};
