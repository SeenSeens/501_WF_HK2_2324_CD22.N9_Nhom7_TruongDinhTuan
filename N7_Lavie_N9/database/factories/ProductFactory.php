<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Gallery;
use App\Models\Producer;
use App\Models\Stock;
use App\Models\Supplier;
use App\Models\Trademark;
use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence;
        $image = $this->faker->image;
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => $this->faker->paragraph,
            'thumbnail' => Storage::putFile('uploads', $image),
            'price' => $this->faker->randomNumber(),
            'discount' => $this->faker->randomNumber(),
            'new' => $this->faker->randomElement([ 'true', 'false']),
            'outstanding' => $this->faker->randomElement([ 'true', 'false']),
            'trending' => $this->faker->randomElement([ 'true', 'false']),
            'hot' => $this->faker->randomElement([ 'true', 'false']),
            'bestseller' => $this->faker->randomElement([ 'true', 'false']),
            'category_id' => Category::factory(),
            'type_id' => Type::factory(),
            'trademark_id' => Trademark::factory(),
        ];
    }
}
