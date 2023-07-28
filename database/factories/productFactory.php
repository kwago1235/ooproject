<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product>
 */
class productFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $products = ['Milo', 'Blanca', 'Kopeko', 'Energin', 'Tablia'];
        return [
            'name' => $this->faker->randomElement($products),
            'price' => $this->faker->randomDigit,
            'quantity' => $this->faker->randomDigit,
        ];
    }
}
