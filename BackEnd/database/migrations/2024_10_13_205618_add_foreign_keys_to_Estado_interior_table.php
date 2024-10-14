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
        Schema::table('Estado_interior', function (Blueprint $table) {
            $table->foreign(['ID_ESTADO'], 'R_29')->references(['ID_ESTADO'])->on('Estado')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_CONDICION'], 'R_46')->references(['ID_SUB'])->on('Sub_Parametricas_Producto')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Estado_interior', function (Blueprint $table) {
            $table->dropForeign('R_29');
            $table->dropForeign('R_46');
        });
    }
};
