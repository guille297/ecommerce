<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subcategories = [
            #Celulares y tablets
            [
                'category_id' => 1,
                'name' => 'Celulares y smartphones',
                'slug' => Str::slug('Celulares y smartphones'),
                'color' => true
            ],
            [
                'category_id' => 1,
                'name' => 'Accesorios para celulares',
                'slug' => Str::slug('Accesorios para celulares')
            ],
            [
                'category_id' => 1,
                'name' => 'Smartwatches',
                'slug' => Str::slug('Smartwatches'),
                'color' => true
            ],

            #Tv y audio
            [
                'category_id' => 2,
                'name' => 'Tv y audio',
                'slug' => Str::slug('Tv y audio')
            ],
            [
                'category_id' => 2,
                'name' => 'Audios',
                'slug' => Str::slug('Audios')
            ],
            [
                'category_id' => 2,
                'name' => 'Audio para autos',
                'slug' => Str::slug('Audio para autos')
            ],

            #Consola y videojuegos
            [
                'category_id' => 3,
                'name' => 'Xbox',
                'slug' => Str::slug('Xbox')
            ],
            [
                'category_id' => 3,
                'name' => 'Playstation',
                'slug' => Str::slug('Playstation')
            ],
            [
                'category_id' => 3,
                'name' => 'PC Gaming',
                'slug' => Str::slug('PC Gaming')
            ],
            [
                'category_id' => 3,
                'name' => 'Nintendo',
                'slug' => Str::slug('Nintendo')
            ],

            #Computacion
            [
                'category_id' => 4,
                'name' => 'Laptops',
                'slug' => Str::slug('Laptops'),
                'color' => true
            ],
            [
                'category_id' => 4,
                'name' => 'PC',
                'slug' => Str::slug('PC'),
                'color' => true
            ],
            [
                'category_id' => 4,
                'name' => 'Almacenamiento',
                'slug' => Str::slug('Almacenamiento')
            ],
            [
                'category_id' => 4,
                'name' => 'Accesorios computadoras',
                'slug' => Str::slug('Accesorios computadoras'),
                'color' => true
            ],

            #Moda
            [
                'category_id' => 5,
                'name' => 'Mujeres',
                'slug' => Str::slug('Mujeres'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' => 5,
                'name' => 'Hombres',
                'slug' => Str::slug('Hombres'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' => 5,
                'name' => 'Lentes',
                'slug' => Str::slug('Lentes'),
            ],
            [
                'category_id' => 5,
                'name' => 'Relojes',
                'slug' => Str::slug('Relojes')
            ],
        ];

        foreach ($subcategories as $subcategory) {
            Subcategory::factory(1)->create($subcategory);
        }
    }
}
