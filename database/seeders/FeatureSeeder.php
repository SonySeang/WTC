<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Feature::create(['icon' => 'fa-solid fa-gear', 'title' => 'Service 1']);
        Feature::create(['icon' => 'bi bi-gem', 'title' => 'Example Service 2']);
    }
}
