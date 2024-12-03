<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Instructor;
use App\Models\Course;
use App\Models\Schedule;

class ScheduleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Schedule::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'course_id' => Course::factory(),
            'day' => $this->faker->word(),
            'time' => $this->faker->time(),
            'room' => $this->faker->word(),
            'instructor_id' => Instructor::factory(),
        ];
    }
}
