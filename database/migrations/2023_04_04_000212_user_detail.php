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
        Schema::create('user_detail', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('role_id')->nullable();
            $table->foreign('role_id')->references('id')->on('role');

            $table->unsignedBigInteger('org_id')->nullable();

            //if null it mean the user use free subs
            $table->unsignedBigInteger('subs_id')->nullable();

            $table->unsignedBigInteger('parent_id')->nullable();

            $table->string('fullname');
            $table->string('phone_number');
            $table->string('year_of_birth');
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
