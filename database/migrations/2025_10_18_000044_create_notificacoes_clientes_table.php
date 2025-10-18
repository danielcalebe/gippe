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
        Schema::create('notificacoes_clientes', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('idPedidos')->nullable();
            $table->integer('idClientes')->nullable();
            $table->integer('idNotificacoes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notificacoes_clientes');
    }
};
