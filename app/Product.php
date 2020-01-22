<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function tags()
    {
        return $this->morphToMany('App\Tag', 'taggable');
    }

    public function users()
    {
        return $this->morphedByMany('App\User', 'productable');
    }
}
