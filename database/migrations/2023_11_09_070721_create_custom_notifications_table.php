<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     *   "student_id" => "9a91f868-b517-4b4a-a78e-dacf21b595d0"
    "teacher_id" => null
    "session_id" => null
    "title" => "tt"
    "body" => "bbbb"
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('custom_notifications', function (Blueprint $table) {
            $table->id();
            $table->string('student_id')->nullable();
            $table->string('teacher_id')->nullable();
            $table->string('session_id')->nullable();
            $table->string('title');
            $table->string('body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('custom_notifications');
    }
};
