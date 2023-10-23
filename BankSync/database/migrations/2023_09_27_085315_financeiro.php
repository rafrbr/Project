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
        Schema::create('financeiros', function (Blueprint $table){
         $table->id();
            $table->date('data');
            $table->string('origem'); // Alterado para string
            $table->boolean('tipo')->default(true); // true para Receita, false para Despesa
            $table->decimal('valor', 8, 2);
            $table->string('grupo');
            $table->string('subgrupo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('financeiros');
    }
};
