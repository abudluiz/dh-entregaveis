<?php

use Illuminate\Database\Seeder;
use App\GeneroModel;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   /*     $genero = GeneroModel::create(['name'=>'Genero1', 'ranking'=>13, 'active'=>true]);
        $genero->active = true;
        $genero->save();
    
        $genero = GeneroModel::create(['name'=>'Genero2', 'ranking'=>14, 'active'=>true]);
        $genero->active = true;
        $genero->save();

       */
        /* Para criar uma Factory, é necessário rodar no seeder.*/
       $generos = factory(GenerosModel::class )->times(50)->create();


    }
}
