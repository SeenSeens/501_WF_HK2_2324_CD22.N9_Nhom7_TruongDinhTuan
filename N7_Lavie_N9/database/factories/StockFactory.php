<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Status;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stock>
 */
class StockFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->word;
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'address' => $this->faker->address,
            'product_id' => Product::factory(),
            'price' => $this->faker->randomNumber,
            'supplier_id' => Supplier::factory(),
            'date_input' => $this->faker->date,
            'date_out' => $this->faker->date,
            'status_id' => Status::factory(),
            'staff_id' => User::factory(),
            'customer_id' => User::factory(),
            'inventory' => $this->faker->word,
            'product_inventory' => $this->faker->randomDigit,
        ];
    }
}
