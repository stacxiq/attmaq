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
        Schema::create('teachers', function (Blueprint $table) {
<<<<<<< HEAD
            $table->uuid('id')->primary();
=======
            $table->id();
>>>>>>> b71d6a1 (add notifications)
            $table->string('name');
            $table->string('title');
            $table->string('phone');
            $table->string('password');
            $table->string('email')->nullable();
            $table->string('gender');
            $table->integer('age');
            $table->integer('rating')->default(0);
            $table->string('image')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
