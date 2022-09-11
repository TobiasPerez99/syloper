<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->text(45),
            'slug' => Str::slug($this->faker->text(15)),
            'descripcion' => $this->faker->text(900),
        ];
    }
}
