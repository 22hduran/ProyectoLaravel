<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pichichis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jugador_id');
            $table->integer('goles');
            $table->timestamps();

            $table->foreign('jugador_id')->references('id')->on('jugadores')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pichichis');
    }
};
