<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'job_title'=>fake()->jobTitle,
            'min_salary'=>fake()->numberBetween($min = 1000, $max = 9000),
            'max_salary'=>fake()->numberBetween($min = 10000, $max = 90000)
        ];
    }
}
