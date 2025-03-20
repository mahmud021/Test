<?php

namespace Database\Seeders;

use App\Models\CovidCase;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CovidCasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $states = ['Lagos', 'Abuja', 'Kano', 'Oyo', 'Rivers', 'Kaduna'];

        foreach ($states as $state) {
            CovidCase::create([
                'state' => $state,
                'cases' => rand(1000, 5000),
                'date' => now()->subDays(rand(1, 30))
            ]);
        }
    }
}
