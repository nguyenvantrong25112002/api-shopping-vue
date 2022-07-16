<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->name();
        $slug = Str::slug($name);
        return [
            'name' => $name,
            'slug' => $slug,
            'order' => 0,
            'parent_id' => 0,
            'status' => 1,
            'created_at' => $this->faker->dateTimeBetween('-' . rand(21, 30) . ' day'),
            'updated_at' => $this->faker->dateTimeBetween('-' . rand(0, 20) . ' day'),

        ];
    }
}