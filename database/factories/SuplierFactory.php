<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Suplier>
 */
class SuplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->company(),
            'kontak' => $this->faker->name(),
            'telpon' => $this->faker->phoneNumber(),
            'email' => $this->faker->word,
            'alamat' => $this->faker->word,
            'kota' => $this->faker->word,
            'provinsi' => $this->faker->word,
            'negara' => $this->faker->word,
            'kodepos' => $this->faker->numberBetween(10000, 99999),
        ];
    }
}
