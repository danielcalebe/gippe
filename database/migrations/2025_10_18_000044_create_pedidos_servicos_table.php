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
        Schema::create('pedidos_servicos', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('idServicos')->nullable();
            $table->integer('idPedidos')->nullable();
            $table->string('funcionarioTipo')->nullable();
            $table->integer('quantidade')->nullable();
            $table->decimal('subtotal', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos_servicos');
    }
};
