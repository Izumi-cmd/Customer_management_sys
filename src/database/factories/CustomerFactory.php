<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'shop_id' => $this->faker->numberBetween(1, 5),
            'name' => $this->faker->name(),
            'postal_code' => $this->faker->postcode(),
            'address' => $this->faker->address(),
            'birthday' => $this->faker->date(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'kramer_flag' => $this->faker->boolean(),
        ];
    }
}
