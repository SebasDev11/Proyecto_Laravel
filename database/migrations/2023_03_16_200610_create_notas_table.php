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
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_Estudiante'); // Relación con categorias
            $table->foreign('id_Estudiante')->references('id')->on('estudiantes'); // clave foranea
            $table->decimal('nota3', 8, 2);
            $table->decimal('nota2', 8, 2);
            $table->decimal('nota1', 8, 2);
            $table->date('date_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};
