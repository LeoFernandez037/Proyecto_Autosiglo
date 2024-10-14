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
        Schema::create('Parametricas_Inventario', function (Blueprint $table) {
            $table->integer('ID_PARAMETRICA');
            $table->string('DESCRIPCION', 20)->nullable();

            $table->primary(['ID_PARAMETRICA'], 'xpkparametricas_inventario');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Parametricas_Inventario');
    }
};
