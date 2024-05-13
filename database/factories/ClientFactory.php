<?php

namespace Database\Factories;

use App\Enums\ClientType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Client;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'street' => $this->faker->streetName(),
            'city' => $this->faker->city(),
            'state' => $this->faker->word(),
            'zip' => $this->faker->postcode(),
            'client_type' => $this->faker->randomElement(ClientType::class),
            'tax_id' => $this->faker->word(),
            'first_name' => $this->faker->firstName(),
            'middle_name' => $this->faker->word(),
            'last_name' => $this->faker->lastName(),
            'suffix' => $this->faker->word(),
            'ssn' => $this->faker->ssn(),
            'drivers_license' => $this->faker->word(),
            'date_of_birth' => $this->faker->date(),
        ];
    }
}
