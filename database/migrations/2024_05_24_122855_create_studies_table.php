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
        Schema::create('studies', function (Blueprint $table) {
            $table->id();
             //Atributos foraneos
             $table->unsignedBigInteger('student_id')->nullable();
             $table->unsignedBigInteger('module_id')->nullable();
            //referenciando la tabla users
             $table->foreign('student_id')
                 ->references('id')
                 ->on('students')->onDelete('set null');
                 $table->foreign('module_id')
                 ->references('id')
                 ->on('modules')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studies');
    }
};
