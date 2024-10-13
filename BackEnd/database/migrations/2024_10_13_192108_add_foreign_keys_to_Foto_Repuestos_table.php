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
        Schema::table('Foto_Repuestos', function (Blueprint $table) {
            $table->foreign(['ID_REPUESTO'], 'R_56')->references(['ID_REPUESTO'])->on('Repuesto')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Foto_Repuestos', function (Blueprint $table) {
            $table->dropForeign('R_56');
        });
    }
};
