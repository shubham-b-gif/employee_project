<?php

namespace Database\Factories;

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
    public function definition()
    {
        return [
            'first_name'=>fake()->firstname,
            'last_name'=>fake()->lastName,
            'email'=>fake()->unique()->safeEmail(),
            'hire_date'=>fake()->date,
            'salary'=>fake()->numberBetween($min = 10000, $max = 90000),
            'manager_id'=>fake()->randomDigit 
        ];
    }
}
