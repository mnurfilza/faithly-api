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
        Schema::create('coupon', function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('disc');
            $table->string('coupon_code');
            $table->string('coupon_type')->nullable();
            $table->date('exp_date')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('coupon');
    }
};
