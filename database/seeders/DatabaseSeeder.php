<?php

namespace Database\Seeders;

use App\Models\Banner;
use App\Models\Category;
use App\Models\CategoryProduct;
use App\Models\GalleryProducts;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Product::factory(40)->create();
        Category::factory(10)->create();
        $cate  = Category::all();
        Product::all()->each(function ($pro) use ($cate) {
            $pro->categorys()->syncWithoutDetaching(
                $cate->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
        GalleryProducts::factory(100)->create();
        Banner::factory(10)->create();
    }
}