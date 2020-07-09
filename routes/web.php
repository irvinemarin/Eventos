<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


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

Route::get('/', 'MainController@index');


Route::post('validate', 'UsuarioController@validateUser');
Route::get('user/login', function () {
    return view("login.login");
});

Route::get('/main', 'MainController@index');

Route::get('user/create', 'UsuarioController@registerUser');
Route::post('user/addUser', 'UsuarioController@addUser');


Route::get('evento/index', 'EventoController@index');
Route::get('evento/show/{idEvento}', 'EventoController@show');
Route::get('evento/update/{idEvento}', 'EventoController@update');
Route::post('evento/updateEvento/{idEvento}', 'EventoController@updateEvento');
Route::get('evento/activar/{idEvento}', 'EventoController@activar');
Route::get('evento/desactivar/{idEvento}', 'EventoController@desactivar');
Route::post('evento/store', 'EventoController@store');

Route::get('evento/comprar', 'EventoController@comprar');


Route::get('anuncio/index', 'AnuncioController@index');
Route::post('anuncio/store', 'AnuncioController@store');
Route::get('anuncio/activar/{idAnuncio}', 'AnuncioController@activar');
Route::get('anuncio/desactivar/{idAnuncio}', 'AnuncioController@desactivar');
Route::get('anuncio/update/{idEvento}', 'AnuncioController@update');
Route::post('anuncio/updateAnuncio/{idAnuncio}', 'AnuncioController@updateAnuncio');


Route::get('user/out', 'MainController@salir');


//
Route::get('image/{filename}', function ($filename) {
    $path = storage_path("app/public/img/eventos/" . $filename);
    $img = Image::make($path);
    return $img->response('jpg');
});

Route::get('anuncio/{filename}', function ($filename) {
    $path = storage_path("app/public/img/anuncios/" . $filename);
    $img = Image::make($path);
    return $img->response('jpg');
});


