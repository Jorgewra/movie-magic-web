<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'name','director', 'classification','year','description'
    ];
    public function getActors(){
        return $this->belongsToMany('App\models\Actor','movie_actors','movie_id','actor_id');
    }
}
