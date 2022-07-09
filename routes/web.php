<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return 'ainda tou na rota';
//    //return view('bemvindo');
//});



//SiteController -----rota
//tipo da rota  --  controller  --  function do controller
Route::get('/',[SiteController::class, 'index']);
Route::get('/sair',[SiteController::class, 'sair']);
Route::get('/usuarios/{qnt}',[SiteController::class, 'user']);
