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
        Schema::create('SeguroPersona', function (Blueprint $table) {
            $table->string('TIPO_SEGURO', 20)->nullable();
            $table->integer('ID_INSTITUCION')->nullable();
            $table->integer('ID_SEGURO_PERSONA');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('SeguroPersona');
    }
};
