<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('goles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('partido_id');
            $table->unsignedBigInteger('jugador_id');
            $table->timestamps();

            $table->foreign('partido_id')->references('id')->on('partidos')->onDelete('cascade');
            $table->foreign('jugador_id')->references('id')->on('jugadores')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('goles');
    }
};
