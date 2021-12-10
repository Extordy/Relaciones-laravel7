<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    //relacion para indicar que un level tiene muchos usuarios
    //uno a muchos  interese ver a los ususarios en el nivel
    //hasMany tiene muchos
    public function users()
    {
        return $this->hasMany(User::class);
    }
    //relacion para indicar que un level tiene muchos post ataraves de usuarios
    //hasManyThrough muchos atraves de
    public function posts()
    {
        return $this->hasManyThrough(Post::class,User::class);
    }
    //relacion para indicar que un level tiene muchos videos atraves de usuarios
    //hasManyThrough muchos atraves de
    public function videos()
    {
        return $this->hasManyThrough(Video::class,User::class);
    }
}
