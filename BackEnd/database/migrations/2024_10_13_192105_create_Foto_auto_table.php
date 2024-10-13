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
        Schema::create('Foto_auto', function (Blueprint $table) {
            $table->integer('ID_FOTO_AUTO');
            $table->string('FOTOGRAFIA', 180)->nullable();
            $table->integer('ID_AUTO')->nullable();

            $table->primary(['ID_FOTO_AUTO'], 'xpkfoto_auto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Foto_auto');
    }
};
