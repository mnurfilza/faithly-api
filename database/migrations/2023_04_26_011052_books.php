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
        Schema::create('books',function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('testament_id');
            $table->foreign('testament_id')->references('id')->on('testaments');
            $table->string('order');
            $table->string('order_all');

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
