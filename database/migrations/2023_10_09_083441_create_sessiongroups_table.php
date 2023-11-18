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
        Schema::create('sessiongroups', function (Blueprint $table) {
            $table->uuid('id')->primary();;
            $table->foreignUuid('teacher_id')->constrained('teachers')->references('id')->onDelete('cascade');
            $table->string('title');
            $table->string('content');
            $table->dateTime('start-date');
            $table->time('start-time');
            $table->string('url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessiongroups');
    }
};
