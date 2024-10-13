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
        Schema::create('Estado_interior', function (Blueprint $table) {
            $table->integer('ID_ESTADO_INT');
            $table->string('DESCRIPCION', 180)->nullable();
            $table->integer('ID_ESTADO')->nullable();
            $table->integer('ID_CONDICION')->nullable();

            $table->primary(['ID_ESTADO_INT'], 'xpkestado_interior');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Estado_interior');
    }
};
