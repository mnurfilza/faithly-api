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
        

        Schema::create('verse_contents',function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('version_id');
            $table->foreign('version_id')->references('id')->on('versions');
            $table->unsignedBigInteger('verse_id');
            $table->foreign('verse_id')->references('id')->on('verses');
            $table->text('content');

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
