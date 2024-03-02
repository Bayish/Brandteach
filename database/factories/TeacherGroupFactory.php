<?php

namespace Database\Factories;

use App\Models\Group;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TeacherGroup>
 */

class TeacherGroupFactory extends Factory
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
            'teacher_id' => User::whereHas('role', function ($query) {
                $query->where('name', 'teacher');
            })->inRandomOrder()->first()->id,
        ];
    }
}
