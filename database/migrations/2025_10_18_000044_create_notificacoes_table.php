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
        Schema::create('notificacoes', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('idNotificacaoArray')->nullable();
            $table->string('mensagem', 500)->nullable();
            $table->date('dataEnvio')->nullable();
            $table->string('titulo');
            $table->boolean('lido')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notificacoes');
    }
};
