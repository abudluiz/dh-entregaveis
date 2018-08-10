<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\aula38Model;

class aula38Controller extends Controller
{
    public function form() {
        return view('form');
    }

    public function delete ($id) {
        $filme = Filme::find($id);
        $filme->delete();
        return 'Filme excluido com sucesso!';
    }

    public function exibirFilmes() {
        $filmes = Filme::all();
        return view('todosFilmes')->with('filmes', $filmes);
    }

    public function editForm($id) {
        $filme=Filme::find($id);
        return view('editForm')->with('filme', $filme);
    }

    public function update (Request $request, $id){
        $filme = Filme::find($id);
        $filme->title=$request->input('title');
        $filme->rating=$request->input('rating');
        $filme->awards=$request->input('awards');
        $filme->length=$request->input('length');
        $filme->release_date = $request->input('release_date');

        $sucesso = $filme->save();

        $todosFilmes = Filme::all();

        if ($sucesso) {
            return view('todosFilmes')
                ->with('edicaoSucesso', true)
                ->with('filmes', $todosFilmes);
        } else {
            return view('todosFilmes')
                ->with('ocorreuErro', true)
                ->with('filmes', $todosFilmes);
        }
    }
    public function validar(Request $request){
        $this->validate($request, [
            'title'=> 'required',
            'rating'=> 'required|numeric|min:1-max:10',
            'awards'=> 'required|numeric',
            'length'=> 'required|numeric',
            'dia'=> 'required|numeric|min:1-max:31',
            'mes'=> 'required|numeric|min:1-max:12',
            'ano'=> 'required|numeric|min:1900-max:2018',
        ]); 
                $usuario = aula38Model::create([
                  'title'=> $request->input('title'),
                  'rating'=> $request->input('rating'),
                  'awards'=> $request->input('awards'),
                  'length'=> $request->input('length'),
                  'release_date' => $request->input('release_date')
                  ]); 
                
                  $sucesso = $usuario->save();

                  if ($sucesso) {
                      return view('form')->with('sucesso', true);
                  } else {
                      return view('form')->with('ocorreuErro', true);
                  }
    }
 }
