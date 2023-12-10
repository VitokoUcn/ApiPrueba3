<?php

// database/seeders/DatabaseSeeder.php

use Illuminate\Database\Seeder;
use App\Models\Profile;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Llamadas a los factories
        Profile::factory(5)->create();
        \App\Models\Framework::factory(10)->create();
        \App\Models\Hobby::factory(8)->create();
    }
}
