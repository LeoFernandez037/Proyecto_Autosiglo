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
        Schema::table('Usuario', function (Blueprint $table) {
            $table->foreign(['ID_INFO_CONTRA'], 'R_93')->references(['ID_INFO_CONTRA'])->on('Informacion_Contraseña')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_PERSONA'], 'R_96')->references(['ID_PERSONA'])->on('Persona')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_ROL'], 'R_98')->references(['ID_ROL'])->on('Rol')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Usuario', function (Blueprint $table) {
            $table->dropForeign('R_93');
            $table->dropForeign('R_96');
            $table->dropForeign('R_98');
        });
    }
};
