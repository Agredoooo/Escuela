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
        Schema::create('user__examples', function (Blueprint $table) {
            $table->id();
            $table->date("Fecha_Prestamo");
            $table->unsignedBigInteger('usuario_id')->nullable();
            $table->unsignedBigInteger('ejemplar_id')->nullable();

            $table->foreign('usuario_id')
            ->references('id')
            ->on('users')->onDelete('cascade');

            $table->foreign('ejemplar_id')
            ->references('id')
            ->on('examples')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user__examples');
    }
};
