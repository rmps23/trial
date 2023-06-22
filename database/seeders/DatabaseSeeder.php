<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 5; $i++) {
            Movie::create([
                'title' => $faker->sentence,
                'genre' => $faker->randomElement(['Action', 'Comedy', 'Drama', 'Sci-Fi']),
                'year' => $faker->numberBetween(2000, 2022),
            ]);
        }
    }
}
