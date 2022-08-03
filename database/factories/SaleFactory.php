<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
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

            'invoice' => $this->faker->randomDigit(),
            'name' => $name,
            'slug' => Str::slug($name),
            'address' => $this->faker->sentence,
            'reference' => $this->faker->sentence,
            'phone1' => $this->faker->randomDigit(),
            'phone2' => $this->faker->randomDigit(),
            'cpf' => $this->faker->randomDigit(),
            'payment'=>$this->faker->word,
            'sale_products' => $this->faker->sentence,
            'discount' => $this->faker->randomDigit(),
            'total' => $this->faker->randomFloat(1, 50, 2000),
            'cover' => $this->faker->imageUrl(),
            /* 'category'=>$this->faker->word, */
            /* 'volumes'=>$this->faker->word, */
            /* 'provider'=>$this->faker->word, */
        ];
    }
}
