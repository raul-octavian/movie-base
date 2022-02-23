<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\DateFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'title' => $this->faker->name,
            'length' => $this->faker->numberBetween($min = 100, $max = 400),
            'story' => $this->faker->text($maxNbChars = 1000),
            'releaseDate' => $this->faker->date($format = 'Y-m-d'),
            'country' => $this->faker->country(),
            'language' => $this->faker->languageCode,
            'production_studio' => $this->faker->company(),
            'budget' => $this->faker->numberBetween($min = 50000, $max = 300000000),
            'director' => $this->faker->name(),
            'writer' => $this->faker->name(),
            //  'name' => $this->faker->name(),
            // 'email' => $this->faker->unique()->safeEmail(),
            // 'email_verified_at' => now(),
            // 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            // 'remember_token' => Str::random(10),
        ];
    }
}
