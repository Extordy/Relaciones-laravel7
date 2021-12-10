<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //relacion para indicar que un grupo puede tener muchos usuarios
    //muchos a muchos
    //belongsToMany pertenec a y tiene muchos usuarios
    //witgTimetamps generar las fechas
    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
