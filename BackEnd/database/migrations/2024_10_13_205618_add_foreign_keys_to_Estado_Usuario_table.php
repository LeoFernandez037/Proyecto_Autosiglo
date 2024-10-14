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
        Schema::table('Estado_Usuario', function (Blueprint $table) {
            $table->foreign(['ID_ESTADO'], 'R_101')->references(['ID_SUB_PERSONA'])->on('Sub_Parametricas_Persona')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_USUARIO'], 'R_95')->references(['ID_USUARIO'])->on('Usuario')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Estado_Usuario', function (Blueprint $table) {
            $table->dropForeign('R_101');
            $table->dropForeign('R_95');
        });
    }
};
