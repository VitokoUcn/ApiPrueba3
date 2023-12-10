<?php


// database/factories/ProfileFactory.php

namespace Database\Factories;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ProfileFactory extends Factory
{
    protected $model = Profile::class;

    public function definition()
    {
        return [
            'name' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'city' => $this->faker->city,
            'country' => $this->faker->country,
            'summary' => $this->faker->paragraph,
        ];
    }
}
