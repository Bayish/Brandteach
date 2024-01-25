<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Language;
use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $city = City::inRandomOrder()->first();

        return [
            'name' => fake()->name(),
            'surname' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
            'role_id' => Role::inRandomOrder()->first()->id,
            'language_id' => Language::inRandomOrder()->first()->id,
            'company_id' => Company::inRandomOrder()->first()->id,
            'contact_id' => Contact::inRandomOrder()->first()->id,
            'country_id' => $city->country_id,
            'city_id' => $city->id,
            'street' => $this->faker->streetAddress(),
            'number'=> $this->faker->address(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
