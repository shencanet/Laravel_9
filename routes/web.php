<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Route::get | consulta
Route::post | insertar
Route::put | actualizar
Route::delete | eliminar
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', function () {
    return 'Listado Publicaciones';
});


Route::get('/blog/{name}', function ($slug) {
    return 'Saludos, '.$slug;
});

//http://127.0.0.1:8000/blog/shen

//http://127.0.0.1:8000/buscar?query=php

Route::get('buscar', function (Request $request) {
    return $request->all();
});
