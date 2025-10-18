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
        Schema::create('receitas_itens', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('idProdutos')->nullable();
            $table->integer('idMateriasPrimas')->nullable();
            $table->integer('quantidade')->nullable();
            $table->decimal('subtotal', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receitas_itens');
    }
};
