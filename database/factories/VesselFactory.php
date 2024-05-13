<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Client;
use App\Models\Vessel;

class VesselFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vessel::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'type' => $this->faker->word(),
            'length' => $this->faker->randomFloat(0, 0, 9999999999.),
            'motor_type' => $this->faker->word(),
            'motor_count' => $this->faker->randomNumber(),
            'motor_horsepower' => $this->faker->randomNumber(),
            'year' => $this->faker->randomNumber(),
            'client_id' => Client::factory(),
        ];
    }
}
