<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Student;
use App\Models\User;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'first_name' => $this->faker->firstName(),
            'middle_name' => $this->faker->word(),
            'last_name' => $this->faker->lastName(),
            'birth_date' => $this->faker->date(),
            'gender' => $this->faker->word(),
            'address' => $this->faker->word(),
            'contact' => $this->faker->word(),
            'email' => $this->faker->safeEmail(),
            'status' => $this->faker->word(),
            'guardian' => $this->faker->word(),
        ];
    }
}
