<?php

use Illuminate\Database\Seeder;

class GeneroSeeder extends Seeder
{

        /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /* Se quisesse deletar tudo antes de começar a preencher:
        
        $generos = Genero::all();
        $generos->delete();
*/

        $genero = Genero::create(['name'=>'Genero1', 'ranking'=>13, 'active'=>true]);
        $genero->active = true;
        $genero->save();

    
        $genero = Genero::create(['name'=>'Genero2', 'ranking'=>14, 'active'=>true]);
        $genero->active = true;
        $genero->save();
        
        /* 
        
        OU 
        
        Se caso a tabela não tivesse uma obrigatoriedade poderia ser preenchido conforme abaixo:
        
        $genero = Genero::create();
        $genero->name = "Genero 1";
        $genero->ranking = 9;
        $genero->active = true;
        $genero->save();
    
        $genero = Genero::create();
        $genero->name = "Genero 2";
        $genero->ranking = 3;
        $genero->active = true;
        $genero->save();
        */
    }
}
