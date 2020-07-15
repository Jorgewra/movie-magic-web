<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class MovieActor extends Model
{
    protected $fillable = [
        'movie_id','actor_id'
    ];
}
