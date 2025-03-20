<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['amount' => 30, 'category' => 'Jan', 'created_at' => now(), 'updated_at' => now()],
            ['amount' => 40, 'category' => 'Feb', 'created_at' => now(), 'updated_at' => now()],
            ['amount' => 35, 'category' => 'Mar', 'created_at' => now(), 'updated_at' => now()],
            ['amount' => 50, 'category' => 'Apr', 'created_at' => now(), 'updated_at' => now()],
        ];
        DB::table('sales')->insert($data);
    }
}
