<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'name' => $this->faker->word,
            'suplier_id' => $this->faker->numberBetween(1, 10),
            'type' => $this->faker->word,
            'price' => $this->faker->numberBetween(100000, 1000000),
            'qty' => $this->faker->numberBetween(1, 10),

        ];
    }
}
