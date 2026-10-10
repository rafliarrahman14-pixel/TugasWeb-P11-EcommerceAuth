<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Elektronik',
                'slug' => 'elektronik',
                'description' => 'Berbagai produk elektronik dan perangkat teknologi.',
            ],
            [
                'name' => 'Komputer',
                'slug' => 'komputer',
                'description' => 'Laptop, komputer, dan perangkat pendukung komputer.',
            ],
            [
                'name' => 'Aksesoris',
                'slug' => 'aksesoris',
                'description' => 'Berbagai aksesoris untuk perangkat elektronik.',
            ],
            [
                'name' => 'Smartphone',
                'slug' => 'smartphone',
                'description' => 'Smartphone dan perangkat pendukungnya.',
            ],
            [
                'name' => 'Gaming',
                'slug' => 'gaming',
                'description' => 'Perangkat dan aksesoris untuk kebutuhan gaming.',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}