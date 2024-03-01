<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('partidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('local_equipo_id');
            $table->unsignedBigInteger('visitante_equipo_id');
            $table->dateTime('fechaPartido');
            $table->unsignedBigInteger('jornada_id')->nullable();
            $table->timestamps();

            $table->foreign('local_equipo_id')->references('id')->on('equipos')->onDelete('cascade');
            $table->foreign('visitante_equipo_id')->references('id')->on('equipos')->onDelete('cascade');
            $table->foreign('jornada_id')->references('id')->on('jornadas')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('partidos');
    }
};
