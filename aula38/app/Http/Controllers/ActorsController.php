<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\actorModel;

class ActorsController extends Controller
{       
    public function formactors() {
        return view('formactors');
    }

    public function validarator(Request $request){
            $this->validate($request, [
                'first_name'=> 'required',
                'last_name'=> 'required',
                'rating'=> 'required|numeric|min:1-max:10',
            ]); 
            $usuario = actorModel::create([
                'first_name'=> $request->input('first_name'),
                'last_name'=> $request->input('last_name'),
                'rating'=> $request->input('rating'),
                //'favorite_movie_id'=> '10'
                ]); 
              
                //$usuario->save();

                if ($usuario->save()){
                  return "Ator cadastrado com sucesso";}
                else { return view("formactors")->with(['request' => $request])
              ;}
        }
     }
