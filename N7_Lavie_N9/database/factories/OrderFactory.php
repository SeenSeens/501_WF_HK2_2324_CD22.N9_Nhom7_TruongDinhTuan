<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_date' => $this->faker->date,
            'total_money' => $this->faker->randomFloat(),
            'delivery_address' => $this->faker->sentence,
            'payment_methods' => $this->faker->word,
            'note' => $this->faker->sentence,
        ];
    }
}
