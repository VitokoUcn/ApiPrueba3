<?php

// database/factories/HobbyFactory.php

namespace Database\Factories;

use App\Models\Hobby;
use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class HobbyFactory extends Factory
{
    protected $model = Hobby::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'id' => Profile::factory(),
        ];
    }
}
