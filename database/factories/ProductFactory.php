<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'category_id' => Category::inRandomOrder()->value('id'),
            'user_id' => User::inRandomOrder()->value('id'),
            'name' => fake()->randomElement([
                'Laptop ASUS VivoBook',
                'Laptop Lenovo IdeaPad',
                'Mouse Wireless Logitech',
                'Keyboard Mechanical RGB',
                'Headset Gaming',
                'Monitor LED 24 Inch',
                'Smartphone Android',
                'Power Bank 20000mAh',
                'Flashdisk 64GB',
                'SSD 512GB',
            ]),
            'description' => fake()->sentence(12),
            'price' => fake()->numberBetween(50000, 15000000),
            'stock' => fake()->numberBetween(1, 100),
        ];
    }
}