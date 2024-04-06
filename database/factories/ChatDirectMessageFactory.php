<?php

namespace Database\Factories;

use App\Models\ChatDirect;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ChatDirectMessage>
 */

class ChatDirectMessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            'chat_direct_id' => ChatDirect::inRandomOrder()->first()->id,
            'sender_id' => User::inRandomOrder()->first()->id,
            'viewed' => $this->faker->boolean(),
        ];
    }
}
