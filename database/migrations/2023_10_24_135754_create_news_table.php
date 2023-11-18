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
        Schema::create('news', function (Blueprint $table) {
<<<<<<< HEAD
            $table->uuid('id')->primary();;
=======
            $table->id();
>>>>>>> b71d6a1 (add notifications)
            $table->string('title');
            $table->text('content');
            $table->dateTime('date');
            $table->string('url')->nullable();
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
