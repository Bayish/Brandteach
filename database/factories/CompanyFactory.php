<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Contact;
use App\Models\Membership;
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
        $city = City::inRandomOrder()->first();

        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'description' => $this->faker->text(),
            'active' => true,
            'logo' => $this->faker->text(),
            'membership_id' => Membership::inRandomOrder()->first()->id,
            'membership_until' =>  $this->faker->date('Y-m-d', '+2 years'),
            'country_id' => $city->country_id,
            'city_id' => $city->id,
            'street' => $this->faker->streetAddress(),
            'house_number'=> $this->faker->address(),
            'phone_number' => $this->faker->phoneNumber(),
        ];
    }
}
