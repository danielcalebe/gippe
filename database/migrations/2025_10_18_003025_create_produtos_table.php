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
        Schema::create('produtos', function (Blueprint $table) {
            $table->integer('id');
            $table->string('nome')->nullable();
            $table->string('descricao', 500)->nullable();
            $table->enum('tipo', ['salgado', 'bebida', 'doce'])->nullable();
            $table->integer('quantidade')->nullable();
            $table->enum('status', ['ativo', 'inativo', 'em falta'])->nullable();
            $table->decimal('precoUnitario', 10)->nullable();
            $table->date('dataCadastro')->nullable();
            $table->date('dataAtualizacao')->nullable();
            $table->date('dataRemocao')->nullable();
            $table->string('caminhoImagem', 200)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
