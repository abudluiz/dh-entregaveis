<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\GeneroModel;

class GeneroController extends Controller
{
    public function exibirGenero($id){
        $genero = GeneroModel::find($id);
        return view('listaGenero')->with('genero', $genero);
    }
    public function validar (Request $request){
        $this->validate($request, [
            'title' => 'required',
            'genre_id'=> 'genre_id',
            'rating' => 'numeric|min:1-max:10',
            'awards' => 'numeric|min:0',
            'length' => 'numeric|min:50',
            'release_date' => 'date'
        ]);

        $DataParaBanco = date_create_from_format('Y-m-d', $request->input('release_date'));

        $usuario = Movie::create([
            'title' => $request->input('title'),
            'genre_id'=> $request->input('genre_id'),
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
}