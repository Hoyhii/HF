<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HomeworkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'class' => $this->faker->numberBetween(9,14),
            'url' => $this->faker->url(),
            'evaluation' => null,
            'points' => null,
        ];
    }
}
