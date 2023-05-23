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
        //
        Schema::create('topic_verses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('topic_id');
            $table->foreign('topic_id')->references('id')->on('topic');
            $table->unsignedBigInteger('verse_id');
            $table->foreign('verse_id')->references('id')->on('verse_contents');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
