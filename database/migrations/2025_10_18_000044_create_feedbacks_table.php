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
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->integer('id');
            $table->string('mensagem')->nullable();
            $table->enum('avaliacao', ['1', '2', '3', '4', '5'])->nullable();
            $table->date('dataMensagem')->nullable();
            $table->integer('idPedidos')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedbacks');
    }
};
