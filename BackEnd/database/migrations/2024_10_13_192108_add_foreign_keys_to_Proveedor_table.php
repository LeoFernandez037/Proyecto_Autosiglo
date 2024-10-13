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
        Schema::table('Proveedor', function (Blueprint $table) {
            $table->foreign(['ID_PERSONA'], 'R_117')->references(['ID_PERSONA'])->on('Persona')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Proveedor', function (Blueprint $table) {
            $table->dropForeign('R_117');
        });
    }
};
