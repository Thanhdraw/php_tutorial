<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// $table->dateTime('created_at');
// $table->dateTime('update_at');

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Khóa chính tự động tăng
            $table->string('name', 50); // Tên sản phẩm (tối đa 50 ký tự)
            $table->text('content');
            $table->string('img')->nullable(); // Cột img có thể null
            $table->decimal('price', 8, 2)->nullable(); // Giá (8 chữ số, 2 chữ số thập phân)
            $table->unsignedBigInteger('cat_id'); // Cột cat_id kiểu UNSIGNED BIGINT
            // Ràng buộc khóa ngoại
            $table->foreign('cat_id')->references('id')->on('cat')->onDelete('cascade');
            $table->timestamps(); // Cột created_at và updated_at
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
