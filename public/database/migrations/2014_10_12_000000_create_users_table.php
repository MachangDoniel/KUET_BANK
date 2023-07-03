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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('uid')->default(0);
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->double('balance')->default(0);
            $table->string('status')->default('active');
            $table->string('usertype')->default(0); //0 means customer, 1 means admin, 2 means employee
            $table->string('image')->default('N/A');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
        });

        // Set a default 'uid' value for existing records
        \Illuminate\Support\Facades\DB::statement('UPDATE users SET uid = id + 100000');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};