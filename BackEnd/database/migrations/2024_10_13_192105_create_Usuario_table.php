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
        Schema::create('Usuario', function (Blueprint $table) {
            $table->integer('ID_USUARIO');
            $table->integer('ID_INFO_CONTRA')->nullable();
            $table->integer('ID_PERSONA')->nullable();
            $table->string('NICKNAME', 30)->nullable();
            $table->string('CONTRASEÑA', 30)->nullable();
            $table->integer('ID_ROL')->nullable();

            $table->primary(['ID_USUARIO'], 'xpkusuario');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Usuario');
    }
};
