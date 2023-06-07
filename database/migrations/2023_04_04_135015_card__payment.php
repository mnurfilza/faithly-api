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
        Schema::create('card_payment', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('user_detail_id');
            $table->foreign('user_detail_id')->references('id')->on('user_detail');
            $table->string('card_number');
            $table->string('exp_date');
            $table->string('code_verification');
            $table->string('stripe_payment_method_id');
            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')->references('id')->on('statuses');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('card_payment');
    }
};
