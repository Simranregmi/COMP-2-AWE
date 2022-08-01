<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' =>$this->faker->name(),
            'firstname' =>$this->faker->name(),
            'lastname' =>$this->faker->name(),
            'price' =>$this->faker->randomFloat(2, 0, 100),
            'page' =>$this->faker->randomNumber(),

        ];
    }
}
