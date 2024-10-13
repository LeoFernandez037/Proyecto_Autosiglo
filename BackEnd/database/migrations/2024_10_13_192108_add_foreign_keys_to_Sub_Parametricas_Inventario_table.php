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
        Schema::table('Sub_Parametricas_Inventario', function (Blueprint $table) {
            $table->foreign(['ID_PARAMETRICA'], 'R_71')->references(['ID_PARAMETRICA'])->on('Parametricas_Inventario')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Sub_Parametricas_Inventario', function (Blueprint $table) {
            $table->dropForeign('R_71');
        });
    }
};
