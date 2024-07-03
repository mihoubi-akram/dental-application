<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('fr_FR'); 
        return [
            'patient_id' => Patient::factory(), 
            'amount' => $faker->numberBetween(500, 20000),
            'payment_date' => $faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
            'payment_method' => $faker->randomElement(['cash', 'credit_card', 'other']),
            'notes' => $faker->optional()->sentence(),
        ];
    }
}
