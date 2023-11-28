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
        Schema::create('register', function (Blueprint $table) {
            $table->id();
            $table->string('nim'); // Add email column
            $table->string('name'); // Add email column
            $table->string('email'); // Add email column
            $table->string('password'); // Add password column
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('register');
    }
};
