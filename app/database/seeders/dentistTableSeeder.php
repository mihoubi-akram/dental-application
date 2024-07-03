<?php

namespace Database\Seeders;

use App\Models\Dentist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class dentistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dentist::factory()->count(8)->create();
    }
}
