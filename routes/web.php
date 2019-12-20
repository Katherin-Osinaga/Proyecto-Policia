<?php

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
    return view('welcome');
});
Route::get('/juego', function () {
    return view('juego.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');


Route::resource('/policia', 'PoliciaController');
Route::resource('/delincuente', 'DelincuenteController');
Route::resource('/historial', 'HistorialController');
Route::resource('/caso', 'CasoController');
Route::resource('/grado', 'GradoController');
Route::resource('/contacto', 'ContactoController');

Route::get('/player', function () {
    $video = "video/os_simpsons_s25e22_720p.mp4";
    $mime = "video/mp4";
    $title = "Os Simpsons";

    return view('player')->with(compact('video', 'mime', 'title'));
});

Route::get('/video/{filename}', function ($filename) {    
    $videosDir = base_path('video');

    if (file_exists($filePath = $videosDir."/".$filename)) {
        $stream = new \App\Http\VideoStream($filePath);

        return response()->stream(function() use ($stream) {
            $stream->start();
        });
    }

    return response("File doesn't exists", 404);
});