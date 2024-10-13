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
        Schema::table('Sub_Parametricas_Producto', function (Blueprint $table) {
            $table->foreign(['ID_PARAMETRICA'], 'R_39')->references(['ID_PARAMETRICA'])->on('Parametricas_producto')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Sub_Parametricas_Producto', function (Blueprint $table) {
            $table->dropForeign('R_39');
        });
    }
};
