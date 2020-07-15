<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function getActors(){
        return $this->morphToMany('App\model\actor','movie_actors')->with("actors");
    }
}
