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
        Schema::create('alumno_curso', function (Blueprint $table) {
        $table->unsignedBigInteger('alumno_id');
        $table->unsignedBigInteger('curso_id');

        $table->foreign('alumno_id')->references('id')->on('alumnos')->onDelete('cascade');
        $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
