<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('fr_FR'); // Set locale to French
        return [
            'name' => $faker->name,
            'date_of_birth' => $faker->date('Y-m-d', '2000-01-01'),
            'phone' => $faker->unique()->phoneNumber,
            'email' => $faker->unique()->safeEmail,
            'address' => $faker->address,
            'notes' => $faker->sentence,
        ];
    }
}
