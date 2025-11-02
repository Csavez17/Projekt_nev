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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            //$table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('question_category')->constrained('categories')->onDelete('cascade');
            $table->string('question_name');
            $table->datetime('question_duration');
            $table->string('question_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
