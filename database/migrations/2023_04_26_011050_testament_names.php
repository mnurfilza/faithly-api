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
        Schema::create('testament_names',function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('version_id');
            $table->foreign('version_id')->references('id')->on('versions');
            $table->unsignedBigInteger('testament_id');
            $table->foreign('testament_id')->references('id')->on('testaments');
            
            $table->string('name');

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
