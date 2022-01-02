<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name(),
            "description" => $this->faker->paragraph(),
            "rate" => $this->faker->randomElement([3.5, 4, 4.5, 4.8, 4.9, 5, 3.9]),
            "price" => $this->faker->randomElement([500, 200, 100, 1000, 400, 800, 250, 450, 950]),
            "photo" => $this->faker->randomElement(["horror", "knife", "clown_musk", "chaki"]),
        ];
    }
}
