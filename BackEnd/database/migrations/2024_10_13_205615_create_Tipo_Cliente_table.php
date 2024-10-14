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
        Schema::create('Tipo_Cliente', function (Blueprint $table) {
            $table->integer('ID_TIPO_CLIENTE');
            $table->string('DESCRIPCION', 20)->nullable();
            $table->integer('ID_DESCUENTO')->nullable();

            $table->primary(['ID_TIPO_CLIENTE'], 'xpktipo_cliente');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Tipo_Cliente');
    }
};
