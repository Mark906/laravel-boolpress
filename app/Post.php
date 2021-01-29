<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'slug', 'category_id'];

    public function category() {
        return $this->belongsTo('App\Category'); //tab secondaria, belongsto
    }
    public function tags() {
        return $this->belongsToMany('App\Tag'); //tab secondaria, belongsto
    }
}
