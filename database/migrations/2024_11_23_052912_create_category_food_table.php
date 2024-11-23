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
        Schema::create('category_food', function (Blueprint $table) {
            $table->id();
            $table->foreignId('food_post_id');
            $table->foreign('food_post_id')->references('id')->on('food_posts')->onDelete('cascade');

            $table->foreignId('catgory_id');
            $table->foreign('catgory_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_food');
    }
};
