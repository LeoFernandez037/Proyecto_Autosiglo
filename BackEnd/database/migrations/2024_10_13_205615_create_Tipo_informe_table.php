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
        Schema::create('Tipo_informe', function (Blueprint $table) {
            $table->integer('ID_TIPO_INFORME');
            $table->string('DESCRIPCION', 20)->nullable();
            $table->string('ALCANCE', 20)->nullable();

            $table->primary(['ID_TIPO_INFORME'], 'xpktipo_informe');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Tipo_informe');
    }
};
