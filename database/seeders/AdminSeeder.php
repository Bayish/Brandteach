<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Language;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name' => "Baiysh",
            'email' => "bayish.parpiev@gmail.com",
            'password' => Hash::make("password"),
            'remember_token' => Str::random(10),
            'language_id' => Language::inRandomOrder()->first()->id
        ]);
    }
}
