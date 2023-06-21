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
        Schema::create('subscription', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('users');
            $table->float('price');
            $table->unsignedBigInteger('subscription_type');
            $table->foreign('subscription_type')->references('id')->on('subscription_type');
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
