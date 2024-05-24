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
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->integer("Codigo");
            $table->string("Nombre");
             //Atributos foraneos
             $table->unsignedBigInteger('Teacher_id')->nullable();
            
            //referenciando la tabla users
             $table->foreign('Teacher_id')
                 ->references('id')
                 ->on('teachers')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modules');
    }
};