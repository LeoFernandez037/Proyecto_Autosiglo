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
        Schema::create('Informacion_Contraseña', function (Blueprint $table) {
            $table->integer('ID_INFO_CONTRA');
            $table->string('COMPLEJIDAD', 20)->nullable();
            $table->dateTime('EXPIRACION')->nullable();

            $table->primary(['ID_INFO_CONTRA'], 'xpkinformacion_contraseña');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Informacion_Contraseña');
    }
};
