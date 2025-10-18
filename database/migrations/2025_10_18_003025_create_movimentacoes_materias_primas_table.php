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
        Schema::create('movimentacoes_materias_primas', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('idMateriaPrima')->nullable();
            $table->enum('tipo', ['entrada', 'saida', 'retorno'])->nullable();
            $table->integer('quantidade')->nullable();
            $table->date('dataCadastro')->nullable();
            $table->date('dataAtualizacao')->nullable();
            $table->date('dataRemocao')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimentacoes_materias_primas');
    }
};
