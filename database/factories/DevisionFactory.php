<?php

namespace Database\Factories;

use App\Models\Employee;
use Database\Factories\EmployeeFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Devision>
 */
class DevisionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'devision' => fake()->jobTitle(),
            'jobs' => fake()->companySuffix(),
            'projects' => fake()->company(),
        ];
    }
}
