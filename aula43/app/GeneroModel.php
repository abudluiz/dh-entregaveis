<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GeneroModel extends Model
{
    protected $table = "genres";

    public function getIsActive(){
        if ($this->active == 1){
            return "Sim";
        }

        else{
            return "Não";
        }
    }
    public function filmes() {
        return $this->hasMany(Movie::class, 'genre_id', 'id');
    }
}
