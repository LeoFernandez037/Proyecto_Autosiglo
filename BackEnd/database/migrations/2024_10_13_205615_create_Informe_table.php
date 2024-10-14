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
        Schema::create('Informe', function (Blueprint $table) {
            $table->integer('ID_INFORME');
            $table->dateTime('FECHA')->nullable();
            $table->integer('ID_SERVICIO')->nullable();
            $table->integer('ID_TIPO_INFORME')->nullable();
            $table->integer('ID_INVENTARIO')->nullable();
            $table->integer('ID_PERSONA')->nullable();
            $table->dateTime('FECHA__1708')->nullable();

            $table->primary(['ID_INFORME'], 'xpkinforme');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Informe');
    }
};
