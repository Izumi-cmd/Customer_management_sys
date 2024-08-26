<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerLogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_id' => $this->faker->numberBetween(1, 100),
            'user_id' => $this->faker->numberBetween(1, 3),
            'log' => $this->faker->sentence(),
        ];
    }
}
