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
        Schema::table('Servicios', function (Blueprint $table) {
            $table->foreign(['ID_EMPLEADO'], 'R_126')->references(['ID_EMPLEADO'])->on('Empleado')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_TIPO_SERVICIO'], 'R_61')->references(['ID_SUB'])->on('Sub_Parametricas_Producto')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_MARCA'], 'R_62')->references(['ID_SUB'])->on('Sub_Parametricas_Producto')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_EMPRESA'], 'R_64')->references(['ID_EMPRESA'])->on('Empresa')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_AUTO'], 'R_65')->references(['ID_AUTO'])->on('Auto')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_CLIENTE'], 'R_90')->references(['ID_CLIENTE'])->on('Cliente')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Servicios', function (Blueprint $table) {
            $table->dropForeign('R_126');
            $table->dropForeign('R_61');
            $table->dropForeign('R_62');
            $table->dropForeign('R_64');
            $table->dropForeign('R_65');
            $table->dropForeign('R_90');
        });
    }
};
