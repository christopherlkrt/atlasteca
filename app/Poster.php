<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poster extends Model
{
	 protected $fillable = [
        'movie_id', 'image',
    ];

    public function movies()
    {
        return $this->belongsTo('App\Movie');
    }
}
