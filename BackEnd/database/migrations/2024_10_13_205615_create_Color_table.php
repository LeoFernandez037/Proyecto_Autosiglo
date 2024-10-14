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
        Schema::create('Color', function (Blueprint $table) {
            $table->integer('ID_COLOR');
            $table->string('DESCRIPCION', 180)->nullable();
            $table->integer('TIPO_COLOR')->nullable();

            $table->primary(['ID_COLOR'], 'xpkcolor');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Color');
    }
};
