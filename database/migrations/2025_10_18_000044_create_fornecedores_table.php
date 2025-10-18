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
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->integer('id');
            $table->string('nome')->nullable();
            $table->integer('telefone1')->nullable();
            $table->integer('telefone2')->nullable();
            $table->integer('telefone3')->nullable();
            $table->string('email', 200)->nullable();
            $table->integer('cep')->nullable();
            $table->string('estado', 50)->nullable();
            $table->string('cidade')->nullable();
            $table->string('rua')->nullable();
            $table->integer('numero')->nullable();
            $table->string('complemento')->nullable();
            $table->enum('status', ['ativo', 'inativo'])->nullable();
            $table->date('dataCadastro')->nullable();
            $table->date('dataAtualizacao')->nullable();
            $table->date('dataRemocao')->nullable();
            $table->integer('cnpj')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fornecedores');
    }
};
