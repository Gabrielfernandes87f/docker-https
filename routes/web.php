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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/patins', function () {
    return view('patins');
});

Route::get('/perfil1', function () {
    return view('perfil1');
});

Route::get('/perfil2', function () {
    return view('perfil2');
});

Route::get('/perfil3', function () {
    return view('perfil3');
});