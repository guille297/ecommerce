<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Builder;
use App\Models\Product;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::whereHas('subcategory', function (Builder $query) {
            $query->where('color', true)
                ->where('size', true);
        })->get();

        $sizes = ['Talla S', 'Talla M', 'Talla L', 'Talla XL'];

        foreach ($products as $prod) {
            foreach ($sizes as $size)
                $prod->sizes()->create([
                    'name' => $size
                ]);
        }
    }
}
