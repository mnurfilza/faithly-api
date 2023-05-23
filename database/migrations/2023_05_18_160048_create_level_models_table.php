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
        Schema::create('level', function (Blueprint $table) {
            $table->id();
            $table->string('level');
            $table->integer('questions');
            $table->integer('time_per_question');
            $table->integer('free_answer');
            $table->integer('general_refs');
            $table->string('reward_coins');
            $table->unsignedBigInteger('chapter_id');
            $table->foreign('chapter_id')->references('id')->on('chapter');
            $table->boolean('isFinalLevel')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('level');
    }
};
