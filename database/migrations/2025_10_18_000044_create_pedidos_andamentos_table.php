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
        Schema::create('pedidos_andamentos', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('idPedidos')->nullable();
            $table->date('data')->nullable();
            $table->enum('status', ['pendente', 'aceito', 'cancelado', 'entregue'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos_andamentos');
    }
};
