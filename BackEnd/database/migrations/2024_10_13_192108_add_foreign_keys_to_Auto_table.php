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
        Schema::table('Auto', function (Blueprint $table) {
            $table->foreign(['ID_COLOR'], 'R_19')->references(['ID_COLOR'])->on('Color')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_ADUANA'], 'R_20')->references(['ID_ADUANA'])->on('Aduana')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_MOTOR'], 'R_21')->references(['ID_MOTOR'])->on('Motor')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_CARACTERISTICA'], 'R_22')->references(['ID_CARACTERISTICA'])->on('Caracteristicas')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_POLIZA'], 'R_23')->references(['ID_POLIZA'])->on('Poliza')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_RADICATORIA'], 'R_36')->references(['ID_RADICATORIA'])->on('Radicatoria')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Auto', function (Blueprint $table) {
            $table->dropForeign('R_19');
            $table->dropForeign('R_20');
            $table->dropForeign('R_21');
            $table->dropForeign('R_22');
            $table->dropForeign('R_23');
            $table->dropForeign('R_36');
        });
    }
};
