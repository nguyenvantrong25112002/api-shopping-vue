<?php

namespace Database\Factories;

use App\Models\Product\Product as ProductProduct;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GalleryProducts>
 */
class GalleryProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $files = Storage::disk('local')->allFiles();
        $key = array_rand($files);
        return [
            'product_id' => ProductProduct::all()->random()->id,
            // 'product_id' => 50,
            'order' => 0,
            'image' => $files[$key],
        ];
    }
}