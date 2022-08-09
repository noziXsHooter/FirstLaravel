<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
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
            'address' => $this->faker->sentence,
            'reference' => $this->faker->sentence,
            'phone1' => $this->faker->randomDigit(),
            'phone2' => $this->faker->randomDigit(),
            'cpf' => $this->faker->randomDigit(),
            'identity' => $this->faker->randomDigit(),
            'email' => $this->faker->email(),
            'points' => $this->faker->randomDigit(),
            'distance' => $this->faker->randomDigit(),
            'age' => $this->faker->randomDigit(),
            'total' => $this->faker->randomFloat(1, 50, 2000),
            'rating' => $this->faker->randomDigit(),
            'cover' => $this->faker->imageUrl(),
            'born_in' => $this->faker->date_create(),
            /* 'category'=>$this->faker->word, */
            /* 'volumes'=>$this->faker->word, */
            /* 'provider'=>$this->faker->word, */
        ];
    }
}
