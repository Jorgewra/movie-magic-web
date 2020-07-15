<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    public function getMovies(){
        return $this->morphToMany('App\model\movie','movie_actors')->with("movies");
    }
}
