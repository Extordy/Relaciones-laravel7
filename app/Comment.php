<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //relacion polimorfica un comentario perteneca a 
    //morphTo polimorfico  muchos a muchos eqtiqueta madre 
    //commentable metodo del polomorfismo
    public function commentable()
    {
        return $this->morphTo();
    }
    //relacion para indicar que un comentario pertenece a un usuario
    //belongsTo pertenece a un 
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
