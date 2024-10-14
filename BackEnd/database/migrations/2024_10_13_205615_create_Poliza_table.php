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
        Schema::create('Poliza', function (Blueprint $table) {
            $table->integer('ID_POLIZA');
            $table->integer('ID_PAIS')->nullable();
            $table->integer('ID_SEGURO')->nullable();
            $table->dateTime('FECHA_INICIO')->nullable();
            $table->string('COMPAÑIA', 20)->nullable();
            $table->integer('ID_MARCA')->nullable();

            $table->primary(['ID_POLIZA'], 'xpkpoliza');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Poliza');
    }
};
