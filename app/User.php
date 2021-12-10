<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    //relacion para indicar que un usuario tiene un perfil
    //uno a uno
    //hasOne tiene uno
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
    //relacion para indicar que un usuario pertenece a un nivel
    //uno a muchos  unteresa ver en nivel de los uauarios
    //belongsTo perteneca a   un nivel
    public function level()
    {
        return $this->belongsTo(Level::class);
    }
    //relacion para indicar que un usuario puede tener muchos grupos
    //muchos a muchos
    //belongsToMany pertenec a y tiene muchos grupos
    //witgTimetamps generar las fechas
    public function groups()
    {
        return $this->belongsToMany(Group::class)->withTimestamps();
    }
    //relacion para indicar que se tiene una localizacion atraves de perfil
    //uno a uno atraves de
    //hasOneThrough tengo uno atraves de
    //witgTimetamps generar las fechas
    public function location()
    {
        return $this->hasOneThrough(Location::class,Profile::class);
    }
    //relacion para indicar que un usuario tiene muchos post
    //uno a muchos  interese ver a los ususarios en el nivel
    //hasMany tiene muchos
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    //relacion para indicar que un usuario tiene muchos videos
    //uno a muchos  interese ver a los ususarios en el nivel
    //hasMany tiene muchos
    public function videos()
    {
        return $this->hasMany(Video::class);
    }
    //relacion para indicar que un usuario tiene muchos comentarios
    //uno a muchos  interese ver a los ususarios en el nivel
    //hasMany tiene muchos
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    //relacion polimorfica un usuario puede tener una imagen de perfil
    //morphOne polimorfico y uno a uno
    //mageable campo utilixzado para la relacion 
    public function image()
    {
        return $this->morphOne(Comment::class, 'imageable');
    }
}
