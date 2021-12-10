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
		
		->withCount('comments')->get();

        $videos = $user->videos()
		
		->withCount('comments')->get();

    //vistra pasando usuario
    return view('profile',[
        'user' => $user,
        'posts' => $posts,
        'videos' => $videos
    ]);

})->name('profile');