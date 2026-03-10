<?php

namespace Database\Factories;

use Faker\Provider\pt_BR\PhoneNumber;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teams>
 */
class TeamsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $phoneFaker = PhoneNumber::cellphoneNumber([
            'areaCode' => true,
            'countryCode' => false,
            'separator' => '-',
        ]);

        var_dump($phoneFaker);
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $phoneFaker,
            'shift' => $this->faker->randomElement(['Morning', 'Afternoon', 'Full']),
        ];
    }
}
