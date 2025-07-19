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
        Schema::create('adventures', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('days'); // e.g., "3-7 Days", "2 days", "half day"
            $table->string('people'); // e.g., "2-12 People"
            $table->string('difficulty_level'); // e.g., "moderate", "all levels", "expert", "family friendly", "premium experience"
            $table->string('image')->nullable(); // Path to uploaded image
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adventures');
    }
};
