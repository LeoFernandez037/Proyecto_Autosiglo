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
        Schema::table('Referencia', function (Blueprint $table) {
            $table->foreign(['ID_DATOS_FAM'], 'R_115')->references(['ID_DATOS_FAM'])->on('Datos_Familiares')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Referencia', function (Blueprint $table) {
            $table->dropForeign('R_115');
        });
    }
};
