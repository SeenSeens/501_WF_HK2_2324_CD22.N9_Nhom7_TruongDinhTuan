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
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('type_id')->unsigned();
            $table->bigInteger('stock_id')->unsigned();
            $table->bigInteger('gallery_id')->unsigned();
            $table->bigInteger('supplier_id')->unsigned();
            $table->bigInteger('producer_id')->unsigned();
            $table->bigInteger('trademark_id')->unsigned();
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('type_id')
                ->references('id')
                ->on('types')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('stock_id')
                ->references('id')
                ->on('stocks')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('gallery_id')
                ->references('id')
                ->on('galleries')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('supplier_id')
                ->references('id')
                ->on('suppliers')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('producer_id')
                ->references('id')
                ->on('producers')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('trademark_id')
                ->references('id')
                ->on('trademarks')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_details');
    }
};
