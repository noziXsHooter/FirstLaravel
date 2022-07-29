<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->sentence;
        return [

            'name' => $name,
            'slug' => Str::slug($name),
            'cover' => $this->faker->imageUrl(),
            'color' => $this->faker->colorName(),
            'price' => $this->faker->randomFloat(1, 50, 2000),
            'description' => $this->faker->sentence,
            'stock' => $this->faker->randomDigit(),
            /* 'category'=>$this->faker->word, */
            /* 'volumes'=>$this->faker->word, */
            /* 'provider'=>$this->faker->word, */
        ];
    }
}
