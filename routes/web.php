<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|*/

/*
Route::get | consulta
Route::post | insertar
Route::put | actualizar
Route::delete | eliminar
*/

Route::get('/', function () {
    //return view('welcome');
    return view('home');
})->name('home');

Route::get('/blog', function () {
    $posts = [
        ['id' => 1, 'title' => 'PHP',     'slug' => 'php'],
        ['id' => 2, 'title' => 'Laravel', 'slug' => 'laravel']
    ];
    return view('blog', ['posts' => $posts]);
})->name('blog');



Route::get('blog/{slug}', function ($slug) {
    $post = $slug;
    return view('post', ['post' => $post]);
})->name('post');

//http://127.0.0.1:8000/blog/shen

//http://127.0.0.1:8000/buscar?query=php

Route::get('buscar', function (Request $request) {
    return $request->all();
});
