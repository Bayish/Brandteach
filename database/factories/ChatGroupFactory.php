<?php

namespace Database\Factories;

use App\Models\Country;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ChatGroup>
 */

class ChatGroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            'name' => $this->faker->text,
            'description' => $this->faker->text,
            "author_id" => User::whereHas('role', function ($query) {
                $query->where('name', 'teacher');
            })->inRandomOrder()->first()->id,
        ];
    }
}
