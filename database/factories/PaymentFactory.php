<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Payment;
use App\Models\Student;

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
            'student_id' => Student::factory(),
            'amount' => $this->faker->randomFloat(0, 0, 9999999999.),
            'payment_date' => $this->faker->dateTime(),
            'payment_method' => $this->faker->word(),
            'outstanding_bal' => $this->faker->randomFloat(0, 0, 9999999999.),
        ];
    }
}
