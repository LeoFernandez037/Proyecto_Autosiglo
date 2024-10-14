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
        Schema::table('Poliza', function (Blueprint $table) {
            $table->foreign(['ID_SEGURO'], 'R_37')->references(['ID_SEGURO'])->on('Seguro')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_MARCA'], 'R_55')->references(['ID_SUB'])->on('Sub_Parametricas_Producto')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Poliza', function (Blueprint $table) {
            $table->dropForeign('R_37');
            $table->dropForeign('R_55');
        });
    }
};
