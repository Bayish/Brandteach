<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Group>
 */

class GroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            'course_id' => Course::inRandomOrder()->first()->id,
            'name' => $this->faker->text(15),
            'count_of_lessons' => $this->faker->numberBetween(15, 30),
            'start' => now(),
        ];
    }
}


