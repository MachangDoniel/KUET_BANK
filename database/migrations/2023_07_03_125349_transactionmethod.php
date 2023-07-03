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
        Schema::create('transactionmethods', function (Blueprint $table) {
            $table->id();
            $table->double('transfer')->default(0);
            $table->double('withdraw')->default(0);
            $table->double('deposit')->default(0);
            $table->double('total')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactionmethods');
    }
};
