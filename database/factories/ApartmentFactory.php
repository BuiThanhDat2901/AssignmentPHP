<?php

namespace Database\Factories;

use App\Models\Apartment;
use Illuminate\Database\Eloquent\Factories\Factory;

class ApartmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Apartment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'price' => rand(100000, 1000000),
            'content' => $this->faker->dateTime(),
            'portfolio' => $this->faker->name(),
            'ticketPrice' => rand(100000, 1000000),
            'status' => rand(1, 4),
        ];
    }
}
