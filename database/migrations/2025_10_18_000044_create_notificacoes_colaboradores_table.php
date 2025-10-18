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
        Schema::create('notificacoes_colaboradores', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('idPedidos')->nullable();
            $table->integer('idAdmins')->nullable();
            $table->integer('idNotificacoes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notificacoes_colaboradores');
    }
};
