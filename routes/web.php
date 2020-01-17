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

Route::get('/artbook1');
Route::get('/artbook1','artbook1controller@artbook');
Route::post('/artbook1', 'artbook1controller@registrar');
Route::post('/artbook1','artbook1controller@iniciarSesion');
Route::get('/home', function(){
  return view('home');
});
Route::get('/perfil', function(){
  return view('perfil');
});
Route::post('/perfil');
Route::get('/preguntaF', function(){
  return view('preguntaF');
});
