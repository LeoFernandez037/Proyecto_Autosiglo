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
        Schema::create('Cliente', function (Blueprint $table) {
            $table->integer('ID_CLIENTE');
            $table->integer('ID_PERSONA')->nullable();
            $table->dateTime('FECHA_REGISTRO')->nullable();
            $table->integer('ID_TIPO_CLIENTE')->nullable();

            $table->primary(['ID_CLIENTE'], 'xpkcliente');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Cliente');
    }
};
