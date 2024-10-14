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
        Schema::table('Cliente', function (Blueprint $table) {
            $table->foreign(['ID_TIPO_CLIENTE'], 'R_92')->references(['ID_TIPO_CLIENTE'])->on('Tipo_Cliente')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_PERSONA'], 'R_97')->references(['ID_PERSONA'])->on('Persona')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Cliente', function (Blueprint $table) {
            $table->dropForeign('R_92');
            $table->dropForeign('R_97');
        });
    }
};
