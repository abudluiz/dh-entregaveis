<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aula38Model extends Model
{
    protected $table = 'movies';

    protected $fillable = ['title', 'rating', 'awards', 'length', 'release_date'];
}
