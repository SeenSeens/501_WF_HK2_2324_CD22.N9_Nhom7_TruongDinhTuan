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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->string('excerpt')->nullable();
            $table->string('thumbnail')->nullable();
            $table->integer('price')->nullable();
            $table->integer('discount')->nullable();
            $table->enum('new', ['true', 'false']);
            $table->enum('outstanding', ['true', 'false']);
            $table->enum('trending', ['true', 'false']);
            $table->enum('hot', ['true', 'false']);
            $table->enum('bestseller', ['true', 'false']);
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->bigInteger('type_id')->unsigned()->nullable();
            $table->bigInteger('gallery_id')->unsigned()->nullable();
            $table->bigInteger('trademark_id')->unsigned()->nullable();
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
            $table->foreign('gallery_id')
                ->references('id')
                ->on('galleries')
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
        Schema::dropIfExists('products');
    }
};
