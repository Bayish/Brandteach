<?php

namespace Database\Factories;

use App\Models\ChatGroupMessage;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ChatGroupMessageStatus>
 */

class ChatGroupMessageStatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            'chat_group_message_id' => ChatGroupMessage::inRandomOrder()->first()->id,
            'member_id' => User::inRandomOrder()->first()->id,
            'viewed' => $this->faker->boolean(),
        ];
    }
}
