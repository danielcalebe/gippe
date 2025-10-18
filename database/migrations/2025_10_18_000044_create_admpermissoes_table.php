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
        Schema::create('admpermissoes', function (Blueprint $table) {
            $table->integer('id');
            $table->string('cargo')->nullable();
            $table->text('permissoes')->nullable();
            $table->date('dataCadastro')->nullable();
            $table->date('dataAtualizacao')->nullable();
            $table->date('dataRemocao')->nullable();
            $table->integer('idFuncionario')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admpermissoes');
    }
};
