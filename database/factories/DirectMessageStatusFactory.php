<?php

namespace Database\Factories;

use App\Models\DirectMessage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DirectMessageStatus>
 */

class DirectMessageStatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            'direct_message_id' => DirectMessage::inRandomOrder()->first()->id,
            'viewed' => $this->faker->boolean(),
        ];
    }
}
