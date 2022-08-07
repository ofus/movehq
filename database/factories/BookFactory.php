<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Book;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = ucfirst(fake()->word());
        for ($i = 0; $i < random_int(1, 7); $i++) {
            $title .= ' ' . ucfirst(fake()->word());
        }

        return [
            'title' => $title,
            'author' => fake()->name(),
            'publisher' => fake()->company(),
            'isbn' => fake()->isbn10(),
            'isbn13' => fake()->isbn13(),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ];
    }
}
