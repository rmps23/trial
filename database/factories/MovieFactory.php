<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    protected $model = Movie::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'genre' => $this->faker->randomElement(['Action', 'Comedy', 'Drama', 'Sci-Fi']),
            'year' => $this->faker->numberBetween(2000, 2022),
        ];
    }
}
