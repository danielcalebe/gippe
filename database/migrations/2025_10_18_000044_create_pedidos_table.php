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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('idClientes')->nullable();
            $table->string('observacao', 500)->nullable();
            $table->integer('status')->nullable()->default(1);
            $table->decimal('totalPedido', 10)->nullable();
            $table->date('dataPedido')->nullable();
            $table->date('dataEntrega')->nullable();
            $table->integer('idServicos');
            $table->string('codigo')->nullable();
            $table->date('dataAtualizacao')->nullable();
            $table->integer('idEnderecos')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
