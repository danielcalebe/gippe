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
        Schema::create('clientes', function (Blueprint $table) {
            $table->integer('id');
            $table->string('nome')->nullable();
            $table->string('cpf', 11)->nullable();
            $table->date('dataNascimento')->nullable();
            $table->enum('status', ['ativo', 'inativo'])->nullable()->default('ativo');
            $table->string('email')->nullable();
            $table->text('password')->nullable();
            $table->timestamp('dataCadastro')->nullable()->useCurrent();
            $table->timestamp('dataAtualizacao')->useCurrentOnUpdate()->nullable()->useCurrent();
            $table->date('dataRemocao')->nullable();
            $table->string('caminhoImagem', 200)->nullable();
            $table->string('telefone', 15)->nullable();
            $table->date('last_login')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
