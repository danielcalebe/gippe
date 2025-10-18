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
        Schema::create('galeria_imagens', function (Blueprint $table) {
            $table->integer('id');
            $table->enum('evento', ['outros', 'casamento', '15anos', 'formatura', 'infantil'])->nullable()->default('outros');
            $table->string('descricao');
            $table->string('nomeImagem', 25);
            $table->string('tamanhoImagem', 25)->nullable();
            $table->string('tipoImagem', 25)->nullable();
            $table->string('caminhoImagem')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galeria_imagens');
    }
};
