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
        Schema::create('Sub_Parametricas_Inventario', function (Blueprint $table) {
            $table->integer('ID_SUB_INVENTARIO');
            $table->string('DESCRIPCION', 20)->nullable();
            $table->integer('ID_PARAMETRICA')->nullable();

            $table->primary(['ID_SUB_INVENTARIO'], 'xpksub_parametricas_inventario');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Sub_Parametricas_Inventario');
    }
};
