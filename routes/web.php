<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //optener usuarios
    $users = App\User::get();
    //darle esa consulta a la vista
    return view('welcome',['users' => $users]);
});

Route::get('/profile/{id}', function ($id){
    //buscar usuario por id
    $user = App\User::find($id);
    //traer comntarios de post ed usuarui
    $posts  = $user->posts()
        //with('category','image','tags') 
		->withCount('comments')->get();

        $videos = $user->videos()
        //->with('category','image','tags')
		->withCount('comments')->get();

    //vistra pasando usuario
    return view('profile',[
        'user' => $user,
        'posts' => $posts,
        'videos' => $videos
    ]);

})->name('profile');

Route::get('/level/{id}', function ($id){
    //buscar level por id
    $level = App\Level::find($id);
    //traer comntarios de post ed usuarui
    $posts  = $level->posts()
        //->with('category','image','tags') 
		->withCount('comments')->get();

        $videos = $level->videos()
        //->with('category','image','tags')
		->withCount('comments')->get();

    //vistra pasando usuario
    return view('level',[
        'level' => $level,
        'posts' => $posts,
        'videos' => $videos
    ]);

})->name('level');