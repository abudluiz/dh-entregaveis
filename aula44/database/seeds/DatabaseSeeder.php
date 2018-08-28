<?php

use Illuminate\Database\Seeder;
use App\Genres;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GeneroSeeder::class);
    }
}
