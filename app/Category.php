<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //relacion para indicar que una categoria tiene muchos post
    //hasMany tiene muchos
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    //relacion para indicar que una categoria tiene muchos videos
    //hasMany tiene muchos
    public function videos()
    {
        return $this->hasMany(Video::class);
    }
}
