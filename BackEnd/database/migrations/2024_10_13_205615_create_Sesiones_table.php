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
        Schema::create('Sesiones', function (Blueprint $table) {
            $table->integer('ID_SESION');
            $table->integer('ID_USUARIO')->nullable();
            $table->dateTime('FECHA')->nullable();
            $table->dateTime('HORA_ENTRADA')->nullable();
            $table->dateTime('HORA_SALIDA')->nullable();

            $table->primary(['ID_SESION'], 'xpksesiones');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Sesiones');
    }
};
