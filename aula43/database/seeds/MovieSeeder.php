<?php

use Illuminate\Database\Seeder;
use App\Actors;
use App\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $actors = factory(Actors::class )->times(10)->create();
        $movies = factory(Movie::class )->times(10)->create();

        foreach ($movies as $movies) {
            // Associar 3 atores aleatoriamente para cada filme
            $movie->filmeAtorListado()->sync($actors->random(3));
        }
    }
}
