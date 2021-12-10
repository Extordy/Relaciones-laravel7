<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //relacion polimorfica un post puede tener muchos tags
    //morphedByMany polimorfico  muchos a muchos eqtiqueta madre
    //taggable campo utilixzado para la relacion 
    public function posts()
    {
        return $this->morphedByMany(Post::class, 'taggable');
    }
    //relacion polimorfica un video puede tener muchos tags
    //morphedByMany polimorfico  muchos a muchos eqtiqueta madre
    //taggable campo utilixzado para la relacion 
    public function videos()
    {
        return $this->morphedByMany(Video::class, 'taggable');
    }
}
