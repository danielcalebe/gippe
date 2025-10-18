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
        Schema::create('esqueci_senha', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('idClientes')->nullable();
            $table->integer('token')->nullable();
            $table->dateTime('dataEmissao')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('esqueci_senha');
    }
};
