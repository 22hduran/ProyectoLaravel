<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jornadas', function (Blueprint $table) {
            $table->id();
            $table->integer('numero');
            $table->date('fechaInicio');
            $table->date('fechaFinal');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jornadas');
    }
};
