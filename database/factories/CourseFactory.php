<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            'name' => $this->faker->text(),
            'lesson_count' => $this->faker->numberBetween(15, 30),
            'company_id' => Company::inRandomOrder()->first()->id,
            'teacher_id' =>User::whereHas('role', function ($query) {
                $query->where('name', 'student');
            })->inRandomOrder()->first()->id,
            'start' => now(),
        ];
    }
}
