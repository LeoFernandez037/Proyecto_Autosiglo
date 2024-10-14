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
        Schema::create('Estado_Usuario', function (Blueprint $table) {
            $table->integer('ID_ESTADO_USER');
            $table->integer('ID_USUARIO')->nullable();
            $table->dateTime('FECHA')->nullable();
            $table->dateTime('HORA_ENTRADA')->nullable();
            $table->dateTime('HORA_SALIDA')->nullable();
            $table->integer('ID_ESTADO')->nullable();

            $table->primary(['ID_ESTADO_USER'], 'xpkestado_usuario');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Estado_Usuario');
    }
};
