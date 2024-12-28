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
        Feature::create([
            'title'=>'Business Research',
            'description'=>'Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.',
            'icon'=>'fe fe-edit'
        ]);
        Feature::create([
            'title'=>'Business2 Research',
            'description'=>'Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.',
            'icon'=>'fe fe-eye'
        ]);
    }
}
