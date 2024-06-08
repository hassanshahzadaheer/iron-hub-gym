<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Member;
use App\Models\Payment;

class PaymentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Payment::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'member_id' => Member::factory(),
            'amount' => $this->faker->randomFloat(2, 0, 999999.99),
            'payment_date' => $this->faker->date(),
            'payment_method' => $this->faker->regexify('[A-Za-z0-9]{50}'),
        ];
    }
}
