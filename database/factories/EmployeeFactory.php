<?php

namespace Database\Factories;

use App\Models\Devision;
use App\Models\Employee; // {{ edit_1 }}
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'devision_id'=> Devision::factory(),
            'position' => fake()->randomElement(['Owner','Dev','Admin']),
            'salary' => fake()->numberBetween(500, 1500),
            'address' => fake()->address(),
        ];
    }
}