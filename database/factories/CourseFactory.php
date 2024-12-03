<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Instructor;
use App\Models\Course;
use App\Models\Department;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'code' => $this->faker->word(),
            'description' => $this->faker->text(),
            'unit' => $this->faker->numberBetween(-10000, 10000),
            'department_id' => Department::factory(),
            'instructor_id' => Instructor::factory(),
        ];
    }
}
