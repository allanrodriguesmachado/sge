<?php

namespace Database\Factories;

use App\Models\Staff;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classes>
 */
class ClassesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement([
                'Turma 1A', 'Turma 1B', 'Turma 2A', 'Turma 2B', 'Turma 3A'
            ]),
            'staff_id' => Staff::inRandomOrder()->value('id') ?? Staff::factory(),
            'morning' => fake()->numberBetween(20, 30),
            'afternoon' => fake()->numberBetween(20, 30),
            'full_time' => fake()->numberBetween(20, 30),
        ];
    }
}
