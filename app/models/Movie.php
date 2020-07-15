<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'name','director', 'classification'
    ];
    public function getActors(){
        return $this->morphToMany('App\models\Actor','movie_actors')->with("actors");
    }
}
