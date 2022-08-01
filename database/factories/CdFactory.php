<?php

namespace Database\Factories;

use App\Models\Cd;
use Illuminate\Database\Eloquent\Factories\Factory;

class CdFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cd::class;

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
            'price' =>$this->faker->randomFloat(0, 2, 100),
            'playlength' =>$this->faker->randomNumber(),
        ];
    }
}
