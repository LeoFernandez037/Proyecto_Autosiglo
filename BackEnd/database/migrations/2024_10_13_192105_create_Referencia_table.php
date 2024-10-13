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
        Schema::create('Referencia', function (Blueprint $table) {
            $table->integer('ID_REFERENCIA');
            $table->integer('ID_DATOS_FAM')->nullable();
            $table->integer('TELEFONO')->nullable();

            $table->primary(['ID_REFERENCIA'], 'xpkreferencia');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Referencia');
    }
};
