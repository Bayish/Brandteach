<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'address_id' => Address::inRandomOrder()->first()->id,
            'contact_id' => Contact::inRandomOrder()->first()->id,
        ];
    }
}
