<?php
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/blog', [PageController::class, 'blog'])->name('blog');

Route::get('blog/{slug}',[PageController::class, 'post'] )->name('post');

//http://127.0.0.1:8000/blog/shen


//http://127.0.0.1:8000/buscar?query=php

Route::get('buscar', function (Request $request) {
    return $request->all();
});
