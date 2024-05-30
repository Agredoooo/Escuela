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
        Schema::create('truckers', function (Blueprint $table) {
            $table->id();
            $table->integer("DNI");
            $table->string("Tipo");
            $table->string("Poblacion");
            $table->string("Nombre");
            $table->string("Direccion");
            $table->double("Salario");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('truckers');
    }
};
