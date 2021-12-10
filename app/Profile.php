<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // uno a uno desde perfil no se quiere acceder a un usuario, si asi se quisiera se tendra que crear
    //su funcion para la relacion  

    //relacion para indicar que un perfil tiene una localizacion 
    //para la relacion atraves de incluida en users
    //hasOne tiene un
    public function location()
    {
        return $this->hasOne(Location::class);
    }
}
