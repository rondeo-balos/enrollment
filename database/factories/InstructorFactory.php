<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Department;
use App\Models\Instructor;
use App\Models\User;

class InstructorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Instructor::class;

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
            'contact' => $this->faker->word(),
            'email' => $this->faker->safeEmail(),
            'department_id' => Department::factory(),
            'role' => $this->faker->word(),
        ];
    }
}
