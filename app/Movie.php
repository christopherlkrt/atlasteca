<?php

namespace App;

use App\Scopes\MovieScope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
	use SoftDeletes;

	protected $dates = ['deleted_at'];
	
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function gender()
    {
        return $this->belongsTo('App\Gender');

    }

	public function genders(){
        return $this->belongsToMany("App\Gender", "movies_genders" )->withPivot('gender_id');
    }

    public function poster(){
        return $this->hasOne('App\Poster');
    }

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new MovieScope);
    }

}
