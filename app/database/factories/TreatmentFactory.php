<?php

namespace Database\Factories;

use App\Models\Dentist;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Treatment>
 */
class TreatmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('fr_FR'); 
        $toothValues = [
            '1', '2', '3', '4', '5', '6', '7', '8', '9', '10',
            '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',
            '21', '22', '23', '24', '25', '26', '27', '28', '29', '30',
            '31', '32', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I',
            'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T',
            'ALL'
        ];

        $typeNames = ['Soin', 'Implant', 'bridge'];

        return [
            'price' => $faker->numberBetween(2000, 150000), 
            'tooth' => $faker->randomElement($toothValues), 
            'type_name' => $faker->randomElement($typeNames),
            'patient_id' => Patient::factory(),
            'dentist_id' => Dentist::factory(),
        ];
    }
}
