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
        Schema::create('Promocion', function (Blueprint $table) {
            $table->integer('ID_PROMOCION');
            $table->integer('ID_VENTA')->nullable();
            $table->string('NOMBRE_PROMOCION', 20)->nullable();
            $table->string('DESCRIPCION', 20)->nullable();
            $table->dateTime('FECHA_INICIO')->nullable();
            $table->dateTime('FECHA_FIN')->nullable();
            $table->integer('ID_DESCUENTO')->nullable();

            $table->primary(['ID_PROMOCION'], 'xpkpromocion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Promocion');
    }
};
