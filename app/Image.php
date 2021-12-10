<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //relacion polimorfica una imagen perteneca a 
    //morphTo polimorfico  muchos a muchos eqtiqueta madre 
    //imageable metodo del polomorfismo
    public function imageable()
    {
        return $this->morphTo();
    }
}
