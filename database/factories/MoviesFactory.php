<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Genre;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    public function definition()
    {
        return [
            'id' => Str::uuid(), 
            'title' => $this->faker->sentence(3), 
            'description' => $this->faker->paragraph(), 
            'release_date' => $this->faker->date(), 
            'rating' => $this->faker->numberBetween(1, 10), 
            'genre_id' => Genre::inRandomOrder()->first()->id ?? Str::uuid(),
        ];
    }
}
