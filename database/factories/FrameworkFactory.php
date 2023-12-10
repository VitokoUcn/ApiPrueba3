<?php
// database/factories/FrameworkFactory.php

namespace Database\Factories;

use App\Models\Framework;
use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class FrameworkFactory extends Factory
{
    protected $model = Framework::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'level' => $this->faker->randomElement(['Beginner', 'Intermediate', 'Advanced']),
            'year' => $this->faker->dateTimeBetween('2010-01-01', '2023-12-31'),
            'id' => Profile::factory(),
        ];
    }
}
