<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// $table->dateTime('created_at');
// $table->dateTime('update_at');

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Khóa chính tự động tăng
            $table->string('name', 50);
            $table->text('content');
            $table->string('img')->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->unsignedBigInteger('cat_id');
            $table->foreign('cat_id')
                ->references('id')->on('cat')->onDelete('cascade');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
