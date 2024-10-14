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
        Schema::table('Repuesto', function (Blueprint $table) {
            $table->foreign(['ID_MODELO'], 'R_57')->references(['ID_MODELO'])->on('Modelo')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_MARCA'], 'R_59')->references(['ID_SUB'])->on('Sub_Parametricas_Producto')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_TIPO_REPUESTO'], 'R_60')->references(['ID_SUB'])->on('Sub_Parametricas_Producto')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Repuesto', function (Blueprint $table) {
            $table->dropForeign('R_57');
            $table->dropForeign('R_59');
            $table->dropForeign('R_60');
        });
    }
};
