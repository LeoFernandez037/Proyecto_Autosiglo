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
        Schema::create('Proveedor', function (Blueprint $table) {
            $table->integer('ID_PROVEEDOR');
            $table->integer('ID_PERSONA')->nullable();
            $table->string('RAZON_SOCIAL', 20)->nullable();
            $table->string('NIT', 20)->nullable();

            $table->primary(['ID_PROVEEDOR'], 'xpkproveedor');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Proveedor');
    }
};
