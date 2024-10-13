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
        Schema::create('Seguro', function (Blueprint $table) {
            $table->integer('ID_SEGURO');
            $table->integer('ID_COBERTURA')->nullable();
            $table->dateTime('FECHA_INICIO')->nullable();
            $table->dateTime('FECHA_FIN')->nullable();

            $table->primary(['ID_SEGURO'], 'xpkseguro');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Seguro');
    }
};
