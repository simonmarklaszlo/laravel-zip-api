<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Zipcode;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Zipcode>
 */
class ZipcodeFactory extends Factory
{
    protected $model = Zipcode::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'zipcode' => $this->faker->unique()->numberBetween(1000, 9999),
            'city_id' => City::factory(),
        ];
    }
}
