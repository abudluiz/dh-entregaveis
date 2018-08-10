<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class FormController extends Controller
{
    public function form(){
        return view('formFilmes');
    }

    public function exibirFilmes(){
        $filmes = Movie::all();
        return view('todosFilmes')->with('filmes', $filmes);
    }

    public function editForm($id){
        $filme = Movie::find($id);
        return view('editForm')->with('filme', $filme);
    }

    public function update(Request $request, $id){
        $request->validate([
            'title'=> 'required|max:225'
        ]);

        $DataParaBanco = date_create_from_format('Y-m-d', $request->input('release_date'));
        
        $filme = Movie::find($id);
        $filme->title = $request->input('title');
        $filme->rating = $request->input('rating');
        $filme->awards = $request->input('awards');
        $filme->length = $request->input('length');
        $filme->release_date = $DataParaBanco;
        $sucesso = $filme->save();

        $todosFilmes = Movie::all();

        if($sucesso){
            return view('todosFilmes')
                ->with('edicaoSucesso', true)
                ->with('filmes', $todosFilmes);
        }else{
            view('todosFilmes')
                ->with('edicaoSucesso', true)
                ->with('filmes', $todosFilmes);
        }
    }

    // public function delete($id){
    //     $filme = Movie::find($id);

    //     $filme->delete();

    //     return 'Filme deletado com sucesso';

    //     $sucesso = $filme->save();

    //     $todosFilmes = Movie::all();

    //     if($sucesso){
    //         return view('todosFilmes')
    //             ->with('edicaoSucesso', true)
    //             ->with('filmes', $todosFilmes);
    //     }else{
    //         view('todosFilmes')
    //             ->with('edicaoSucesso', true)
    //             ->with('filmes', $todosFilmes);
    //     }
    // }

    public function validar (Request $request){
        $this->validate($request, [
            'title' => 'required',
            'rating' => 'numeric|min:1-max:10',
            'awards' => 'numeric|min:0',
            'length' => 'numeric|min:50',
            'release_date' => 'date',
        ]);

        $DataParaBanco = date_create_from_format('Y-m-d', $request->input('release_date'));

        $usuario = Movie::create([
            'title' => $request->input('title'),
            'rating' => $request->input('rating'),
            'awards' =>$request->input('awards'),
            'length' => $request->input('length'),
            'release_date' => $DataParaBanco
        ]);

        if($usuario->save()){
            return 'Filme cadastrado com sucesso!';
        }else{
            return view('form')->with('request', $request);
        }

        // $sucesso = $filme->save();

        // if($sucesso){
        //     return view('form')->with('sucesso', true);
        // }else{
        //     return view('form')->with('ocorreuErro', true);
        // }

    }
}
