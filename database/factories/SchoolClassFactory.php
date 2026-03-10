<?php

namespace Database\Factories;

use App\Models\SchoolClass;
use App\Models\Teams;
use Dflydev\DotAccessData\Data;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SchoolClass>
 */
class SchoolClassFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement([
                'Infantil I', 'Infantil II', 'Fundamental I',
                'Fundamental II', '1º Ano A', '2º Ano B',
                'Berçário', 'Pré-escola'
            ]),
            'capacity' => $this->faker->numberBetween(20, 40),
            'shift' => $this->faker->randomElement(['morning', 'afternoon', 'full']),
        ];
    }
}
