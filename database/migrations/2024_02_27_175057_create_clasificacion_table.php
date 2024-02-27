<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('clasificacion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('equipo_id');
            $table->integer('partidos');
            $table->integer('victorias');
            $table->integer('empates');
            $table->integer('derrotas');
            $table->integer('golesFavor');
            $table->integer('golesContra');
            $table->integer('puntos');
            $table->timestamps();

            $table->foreign('equipo_id')->references('id')->on('equipos')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('clasificacion');
    }
};
