<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Gallery;
use App\Models\Producer;
use App\Models\Product;
use App\Models\Stock;
use App\Models\Supplier;
use App\Models\Trademark;
use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductDetail>
 */
class ProductDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => Product::factory(),
            'category_id' => Category::factory(),
            'type_id' => Type::factory(),
            'stock_id' => Stock::factory(),
            'gallery_id' => Gallery::factory(),
            'supplier_id' => Supplier::factory(),
            'producer_id' => Producer::factory(),
            'trademark_id' => Trademark::factory(),
        ];
    }
}
