<?php

namespace Database\Seeders;

use App\Models\Promotion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Promotion::insert([
            ['name' => 'Wrestling School'],
            ['name' => 'Maple Leaf Grappling'],
            ['name' => 'Super Lucha Libre'],
            ['name' => 'Wrestling Revolution'],
            ['name' => 'Rising Sun Puroresu'],
            ['name' => 'Weekend Warriors'],
            ['name' => 'Strong Style Wrestling'],
            ['name' => 'All American Wrestling'],
            ['name' => 'Federation Online'],
            ['name' => 'Legends'],
        ]);
    }
}
