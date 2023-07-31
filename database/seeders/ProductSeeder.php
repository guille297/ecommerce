<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory(250)->create()->each(function (Product $prod) {
            Image::factory(4)->create([
                'imageable_id' => $prod->id,
                'imageable_type' => Product::class
            ]);
        });
    }
}
