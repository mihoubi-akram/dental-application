<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dentist>
 */
class DentistFactory extends Factory
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
           'name'=>$faker->name,
           'specialization'=>$faker->randomElement(['Orthodontiste',
                                'Parodontiste',
                                'Prosthodontiste',
                                'Chirurgien dentiste',
                                'Endodontiste'])
        ];
    }
}
