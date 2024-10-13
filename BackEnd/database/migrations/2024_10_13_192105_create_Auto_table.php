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
        Schema::create('Auto', function (Blueprint $table) {
            $table->integer('ID_AUTO');
            $table->integer('ID_RADICATORIA')->nullable();
            $table->integer('NUMERO_CHASIS')->nullable();
            $table->string('TRACCION', 20)->nullable();
            $table->integer('ID_COLOR')->nullable();
            $table->integer('ID_ADUANA')->nullable();
            $table->integer('ID_MOTOR')->nullable();
            $table->integer('ID_CARACTERISTICA')->nullable();
            $table->integer('ID_POLIZA')->nullable();

            $table->primary(['ID_AUTO'], 'xpkauto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Auto');
    }
};
