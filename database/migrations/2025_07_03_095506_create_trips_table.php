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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('image')->nullable();
            $table->date('date');
            $table->integer('days');
            $table->integer('spots_left')->nullable();
            $table->decimal('rating', 3, 2)->default(0.00);
            $table->string('difficulty_level');
            $table->json('tags')->nullable(); // For storing tags like 'Featured', 'New Tour', 'Filling Fast', etc.
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
