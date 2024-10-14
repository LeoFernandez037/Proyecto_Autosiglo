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
        Schema::create('Recibo', function (Blueprint $table) {
            $table->integer('ID_RECIBO');
            $table->string('RAZON_SOCIAL', 20)->nullable();
            $table->integer('ID_PERSONA')->nullable();

            $table->primary(['ID_RECIBO'], 'xpkrecibo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Recibo');
    }
};
