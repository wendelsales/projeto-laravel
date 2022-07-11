<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\UlaController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return 'ainda tou na rota';
//    //return view('bemvindo');
//});



//SiteController -----rota
//tipo da rota  --  controller  --  function do controller
Route::get('/',[SiteController::class, 'index']);
Route::get('/sair',[UlaController::class, 'sair']);
Route::get('/usuarios',[SiteController::class, 'user']);
Route::get('/test',[UlaController::class, 'test']);
Route::get('/test2',[UlaController::class, 'test2']);

