<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //relacion para indicar que un video pertenece a un usuario
    //belongsTo pertenece a un 
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //relacion para indicar que un videopertenece a una categorya
    //belongsTo pertenece a un 
    public function cotegory()
    {
        return $this->belongsTo(Category::class);
    }
    //relacion polimorfica un video puede tener muchos comentarios
    //morphMany polimorfico  uno a muchos
    //commentable campo utilixzado para la relacion 
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
    //relacion polimorfica un video puede tener muchas imagenes
    //morphOne polimorfico y uno a uno
    //mageable campo utilixzado para la relacion 
    public function image()
    {
        return $this->morphOne(Comment::class, 'imageable');
    }
    //relacion polimorfica un post puede tener muchos tags
    //morphToMany polimorfico  muchos a muchos
    //mageable campo utilixzado para la relacion 
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
