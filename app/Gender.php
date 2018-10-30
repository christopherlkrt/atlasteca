<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    public function movies()
    {
        return $this->hasMany('App\Movie');
    }
}
