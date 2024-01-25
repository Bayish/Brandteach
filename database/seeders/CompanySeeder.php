<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\City;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Country;
use App\Models\Course;
use App\Models\Language;
use App\Models\Role;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'teacher']);
        Role::create(['name' => 'student']);
        Role::create(['name' => 'moderator']);

        $role = Role::where('name', 'teacher')->first();

        Country::factory()->count(5)->create();
        City::factory()->count(5)->create();
        Language::factory()->count(1)->create();
        Address::factory()->count(20)->create();
        Contact::factory()->count(20)->create();
        Company::factory()->count(5)->create();

        User::factory()->create([
            'name' => 'Baiysh',
            'surname' => 'parpiev',
            'email' => 'bp@gmail.com',
            'password' => 'test',
            'role_id' => $role->id,
        ]);

        User::factory()->count(40)->create();
        Course::factory()->count(40)->create();
    }
}
