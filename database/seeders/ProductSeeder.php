<?php



namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Men Products
        Product::create([
            'name' => 'Men’s check shirt',
            'description' => 'Stylish check shirt for casual wear, perfect for hot weather.',
            'price' => 1150.00,
            'image' => 'images/products/men1.png'
        ]);
        Product::create([
            'name' => 'Men’s Slim Fit T-Shirt',
            'description' => 'Comfortable cotton T-shirt for a modern, fitted look.',
            'price' => 399.00,
            'image' => 'images/products/men2.png'
        ]);
        Product::create([
            'name' => 'Men’s Formal pant shirt',
            'description' => 'Elegant formal pant suitable for office or formal events.',
            'price' => 1300.00,
            'image' => 'images/products/men3.png'
        ]);

        // Women Products
        Product::create([
            'name' => 'Women’s Three-Piece Sets ',
            'description' => 'Light and nice for event wear.',
            'price' => 2000.00,
            'image' => 'images/products/women1.png'
        ]);
        Product::create([
            'name' => 'Women’s Three-Piece Sets',
            'description' => 'Light and nice for event wear.',
            'price' => 2599.00,
            'image' => 'images/products/women2.png'
        ]);

        // Kids Products
        Product::create([
            'name' => 'Kids’ gown',
            'description' => 'Fun and colorful gown for kids with flower prints.',
            'price' => 999.00,
            'image' => 'images/products/kid1.png'
        ]);
        Product::create([
            'name' => 'Kids’ long gown',
            'description' => 'Fun and colorful gown for kids with flower prints.',
            'price' => 1200.00,
            'image' => 'images/products/kid2.png'
        ]);
        Product::create([
            'name' => 'Kids’ Formal Suit',
            'description' => 'Elegant suit for Kids.',
            'price' => 3900.00,
            'image' => 'images/products/kid3.png'
        ]);
        Product::create([
            'name' => 'Kids’ Sneakers, Trouser, t-shirt combo.',
            'description' => 'Comfortable combo for kids, great for playtime.',
            'price' => 1900.00,
            'image' => 'images/products/kid4.png'
        ]);

        // Watch Product
        Product::create([
            'name' => 'Stylish Analog Watch',
            'description' => 'Sleek and stylish analog watch with a leather strap.',
            'price' => 4500.00,
            'image' => 'images/products/watch1.png'
        ]);

        // Glass Products
        Product::create([
            'name' => 'Classic Aviator Sunglasses',
            'description' => 'Timeless aviator sunglasses with UV protection.',
            'price' => 2200.00,
            'image' => 'images/products/glass1.png'
        ]);
        Product::create([
            'name' => 'Round Frame Sunglasses',
            'description' => 'Trendy round sunglasses for a bold look.',
            'price' => 2000.00,
            'image' => 'images/products/glass2.png'
        ]);
        Product::create([
            'name' => 'Polarized Sports Sunglasses',
            'description' => 'Durable sunglasses designed for outdoor activities.',
            'price' => 2500.00,
            'image' => 'images/products/glass3.png'
        ]);

        // Belt Products
        Product::create([
            'name' => 'Men’s Black Leather Belt',
            'description' => 'Premium leather belt with a classic buckle.',
            'price' => 1500.00,
            'image' => 'images/products/belt1.png'
        ]);
        Product::create([
            'name' => 'Casual Black-Brown Belt',
            'description' => 'Versatile canvas belt for everyday wear.',
            'price' => 800.00,
            'image' => 'images/products/belt2.png'
        ]);
        Product::create([
            'name' => 'Formal Brown Belt',
            'description' => 'Sleek belt for formal and business attire.',
            'price' => 1200.00,
            'image' => 'images/products/belt3.png'
        ]);
    }
}