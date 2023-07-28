<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\staff>
 */
class staffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gender = ['Male', 'Female'];
        return [
            'name' => $this->faker->name,
            'age' => $this->faker->randomDigit,
            'gender' => $this->faker->randomElement($gender),
        ];
    }
}
