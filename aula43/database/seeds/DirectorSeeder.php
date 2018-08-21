<?php

use Illuminate\Database\Seeder;
use App\ModelDirector;
use App\Movie;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Para criar 10 diretores*/
        
        $directors = factory(ModelDirector::class )->times(10)->create();

        foreach ($directors as $director) {
            // Criamos 5 filmes para cada diretor
            factory(Movie::class, 5)->create([
            'director_id' => $director->id,
            ]);
        }
    }
}
