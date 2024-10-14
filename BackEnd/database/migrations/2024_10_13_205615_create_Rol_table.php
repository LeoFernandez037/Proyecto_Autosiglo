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
        Schema::create('Rol', function (Blueprint $table) {
            $table->integer('ID_ROL');
            $table->string('NOMBRE_ROL', 40)->nullable();
            $table->integer('ID_PRIVILEGIO')->nullable();

            $table->primary(['ID_ROL'], 'xpkrol');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Rol');
    }
};
