<?php

namespace Database\Factories;

use App\Models\Group;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StudentGroup>
 */

class StudentGroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            'group_id' => Group::inRandomOrder()->first()->id,
            'student_id' => User::whereHas('role', function ($query) {
                $query->where('name', 'student');
            })->inRandomOrder()->first()->id,
            'payment' => fake()->boolean()
        ];
    }
}
