<?php

namespace Database\Factories;

use Faker\Provider\pt_BR\PhoneNumber;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Staff>
 */
class StaffFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $phoneFaker = PhoneNumber::cellphoneNumber([
            'areaCode' => true,
            'countryCode' => false,
            'separator' => '-',
        ]);

        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $phoneFaker,
            'work_shift' => $this->faker->randomElement(['morning', 'afternoon', 'full']),
        ];
    }
}
