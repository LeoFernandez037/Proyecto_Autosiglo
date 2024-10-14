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
        Schema::table('Sesiones', function (Blueprint $table) {
            $table->foreign(['ID_USUARIO'], 'R_94')->references(['ID_USUARIO'])->on('Usuario')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Sesiones', function (Blueprint $table) {
            $table->dropForeign('R_94');
        });
    }
};
