<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Persona', function (Blueprint $table) {
            $table->integer('ID_PERSONA');
            $table->string('NOMBRES', 30)->nullable();
            $table->string('AP_PATERNO', 30)->nullable();
            $table->string('AP_MATERNO', 30)->nullable();
            $table->dateTime('FECHA_NACIMIENTO')->nullable();
            $table->string('CORREO_ELECTRONICO', 80)->nullable();
            $table->integer('TELEFONO')->nullable();
            $table->integer('ID_GENERO')->nullable();

            $table->primary(['ID_PERSONA'], 'xpkpersona');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Persona');
    }
};
