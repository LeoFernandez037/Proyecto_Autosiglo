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
        Schema::create('Motor', function (Blueprint $table) {
            $table->integer('ID_MOTOR');
            $table->string('DETALLE', 180)->nullable();
            $table->dateTime('AÑO')->nullable();
            $table->string('CONFIGURACION', 20)->nullable();
            $table->string('POTENCIA_MAX', 20)->nullable();
            $table->integer('ID_COMBUSTIBLE')->nullable();
            $table->integer('ID_CILINDRADA')->nullable();

            $table->primary(['ID_MOTOR'], 'xpkmotor');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Motor');
    }
};
