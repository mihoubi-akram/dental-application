<?php

namespace Database\Factories;

use App\Models\Patient;
use App\Models\Treatment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'patient_id' => Patient::factory(),
            'treatment_id' => Treatment::factory(),
            'date' => $this->faker->dateTimeBetween('+1 week', '+2 month')->format('Y-m-d'), 
            'time' => $this->faker->time('H:i:s'),
            'status' => $this->faker->randomElement(['scheduled', 'in_progress', 'completed', 'canceled']), 
        ];
    }
}
