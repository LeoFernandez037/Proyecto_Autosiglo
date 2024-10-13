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
        Schema::create('Datos_Familiares', function (Blueprint $table) {
            $table->integer('ID_DATOS_FAM');
            $table->integer('ID_FAMILIAR')->nullable();
            $table->string('DESCRIPCION', 180)->nullable();
            $table->integer('ID_GRADO')->nullable();

            $table->primary(['ID_DATOS_FAM'], 'xpkdatos_familiares');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Datos_Familiares');
    }
};
