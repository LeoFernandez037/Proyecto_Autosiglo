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
        Schema::table('Seguro', function (Blueprint $table) {
            $table->foreign(['ID_COBERTURA'], 'R_38')->references(['ID_COBERTURA'])->on('Cobertura')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Seguro', function (Blueprint $table) {
            $table->dropForeign('R_38');
        });
    }
};
