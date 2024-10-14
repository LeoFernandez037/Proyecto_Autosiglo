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
        Schema::create('Servicios', function (Blueprint $table) {
            $table->integer('ID_SERVICIO');
            $table->integer('ID_EMPRESA')->nullable();
            $table->string('DESCRIPCION_PROBLEMA', 180)->nullable();
            $table->dateTime('FECHA_SOLICITUD')->nullable();
            $table->dateTime('FECHA_ENTREGA')->nullable();
            $table->integer('ID_AUTO')->nullable();
            $table->integer('ID_EMPLEADO')->nullable();
            $table->integer('ID_CLIENTE')->nullable();
            $table->integer('ID_TIPO_SERVICIO')->nullable();
            $table->integer('ID_MARCA')->nullable();

            $table->primary(['ID_SERVICIO'], 'xpkservicios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Servicios');
    }
};
