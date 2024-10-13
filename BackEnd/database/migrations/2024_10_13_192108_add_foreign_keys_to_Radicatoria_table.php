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
        Schema::table('Radicatoria', function (Blueprint $table) {
            $table->foreign(['ID_DEPARTAMENTO'], 'R_54')->references(['ID_SUB'])->on('Sub_Parametricas_Producto')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Radicatoria', function (Blueprint $table) {
            $table->dropForeign('R_54');
        });
    }
};
