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
        Schema::create('question', function (Blueprint $table) {
            $table->id();
            $table->foreign('id')->references('question_id')->on('vote');
            $table->foreign('id')->references('question_id')->on('answer');
            $table->string('question_name');
            $table->integer('user_id');
            $table->integer('question_category');
            $table->datetime('question_duration');
            $table->string('question_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question');
    }
};
