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
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('address');
            $table->bigInteger('product_id')->unsigned();
            $table->integer('price');
            $table->bigInteger('supplier_id')->unsigned();
            $table->date('date_input'); // Ngày nhập kho
            $table->date('date_out'); // Ngày xuất kho
            $table->bigInteger('status_id'); //Trạng thái của hàng tồn kho, chẳng hạn như mới, cũ, hoặc cần kiểm tra lại.
            $table->bigInteger('staff_id')->unsigned(); // Người chịu trách nhiệm cho việc quản lý hàng tồn kho.
            $table->bigInteger('customer_id')->unsigned();
            $table->string('inventory');
            $table->integer('product_inventory');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stocks');
    }
};
