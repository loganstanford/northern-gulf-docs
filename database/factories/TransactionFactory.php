<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Transaction;

class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaction::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'buyer_type' => $this->faker->word(),
            'seller_type' => $this->faker->word(),
            'initiated_date' => $this->faker->dateTime(),
            'target_close_date' => $this->faker->dateTime(),
            'actual_close_date' => $this->faker->dateTime(),
        ];
    }
}
