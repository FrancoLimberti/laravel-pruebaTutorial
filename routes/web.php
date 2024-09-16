<?php

use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
});

Route::get('/registroUsuario', [UsuariosController::class,'createUser']);
Route::post('/registroUsuario', [UsuariosController::class,'storeUser']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/noticias', function () {
    return view('news');
});


Route::get('/pato', function () {
    dd('llegamos');
   
});



Route::post('/iniciar-sesion', [UsuariosController::class,'login'])->name('iniciar-sesion');
Route::get('/logout', [UsuariosController::class,'logout'])->name('logout');

Route::post('/enviar-comentario', [ComentarioController::class,'storeComentario']);
