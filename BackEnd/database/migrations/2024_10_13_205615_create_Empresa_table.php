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
        Schema::create('Empresa', function (Blueprint $table) {
            $table->integer('ID_EMPRESA');
            $table->string('DIRECCION', 120)->nullable();
            $table->string('NOMBRE_EMPRESA', 30)->nullable();
            $table->string('CORREO', 30)->nullable();
            $table->integer('ID_DEPARTAMENTO')->nullable();
            $table->integer('TELEFONO')->nullable();

            $table->primary(['ID_EMPRESA'], 'xpkempresa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Empresa');
    }
};
