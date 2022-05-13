<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'isbn' => Str::random(10),
            'author' => $this->faker->name(),
            'title' => $this->faker->name(),
            'image' => $this->faker->image(),
            'price' => $this->faker->base(),
            'initialprice' => $this->faker->base()
        ];
    }
}
