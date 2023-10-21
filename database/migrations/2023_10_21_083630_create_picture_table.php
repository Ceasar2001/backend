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
        Schema::create('picture', function (Blueprint $table) {
            $table->id('picture_id');
            $table->string('picture_name')->nullable();
            $table->string('image_path');
            $table->string('description')->nullable();
            $table->timestamps();
        });

        Schema::table('picture', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('picture');
    }
};
