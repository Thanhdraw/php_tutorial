<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasTable('post_img')) {
            Schema::create('post_img', function (Blueprint $table) {
                $table->id();
                $table->string('img', 255);
                $table->string('note', 50)->nullable();
                $table->unsignedBigInteger('post_id');
                $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_img');
    }
};
