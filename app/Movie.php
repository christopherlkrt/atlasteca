<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function gender()
    {
        return $this->belongsTo('App\Gender');
    }

}
