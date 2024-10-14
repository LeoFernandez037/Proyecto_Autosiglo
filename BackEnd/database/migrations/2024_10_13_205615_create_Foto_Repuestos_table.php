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
        Schema::create('Foto_Repuestos', function (Blueprint $table) {
            $table->integer('ID_FOTO_REPUESTO');
            $table->integer('ID_REPUESTO')->nullable();
            $table->string('FOTOGRAFIA', 180)->nullable();

            $table->primary(['ID_FOTO_REPUESTO'], 'xpkfoto_repuestos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Foto_Repuestos');
    }
};
