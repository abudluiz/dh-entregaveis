<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class FilmesController extends Controller
{
public function procurarFilmeId($id) {
         
    $filme = Movie::find($id);
    $nome = $filme->title;

    return view('filme')-> with('nomeDoFilme', $nome);    
  }
 
  public function procurarFilmeNome($nome) {
         
    $filme = Movie::where('title','=','$nome')->first();

    if ($filme) {
        $resultado = $filme->$id . " " . $filme->title;
    }
         else {
            $resultado = "Não foram encontrados filmes com esse nome";
         }
     return view ('nomefilme')-> with ('resultado', $resultado);    
 }
}

//  public function adicionarFilme ($newFilme='Nenhum filme adicionado') {
         
//      $filmes = [
//           1 => "Toy Story",
//           2 => "Procurando Nemo",
//           3 => "Avatar",
//           4 => "Star Wars: Episódio V",
//           5 => "Up",
//           6 => "Mary e Max"
//           ];
 
//           $adicionado = "";
 
//       foreach ($filmes as $antigos) {
//           if ($newFilme !== $antigos){
//               $filmes[] = $newFilme;
//               $adicionado = 'Filme adicionado com sucesso';
//           }
//           else {
//               $adicionado = 'Esse filme já está na lista';
//           }
//       return view ('novoFilme')-> with ('adicionado', $adicionado);    
//   }
//  }