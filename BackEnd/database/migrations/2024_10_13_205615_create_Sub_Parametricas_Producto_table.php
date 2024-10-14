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
        Schema::create('Sub_Parametricas_Producto', function (Blueprint $table) {
            $table->integer('ID_SUB');
            $table->integer('ID_PARAMETRICAS')->nullable();
            $table->string('DECRIPCION', 180)->nullable();
            $table->integer('ID_PARAMETRICA')->nullable();

            $table->primary(['ID_SUB'], 'xpksub_parametricas_producto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Sub_Parametricas_Producto');
    }
};
