<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Language;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
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
            'surname' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => Hash::make('test'),
            'remember_token' => Str::random(10),
            'language_id' => Language::inRandomOrder()->first()->id,
            'company_id' => Company::inRandomOrder()->first()->id,
            'address_id' => Address::inRandomOrder()->first()->id,
            'contact_id' => Contact::inRandomOrder()->first()->id,
        ];
    }
}
