<?php

<<<<<<< HEAD
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

Route::get('/layout', function () {
    return view('layouts.layout');
});

Route::get('/index', function () {
    return view('page.main');
});

Route::get('/login', function () {
    return view('page.login');
});

Route::get('/whats-new', function(){
    return view('page.whats-new');
});

Route::get('/helpx', function(){
    return view('page.helpx');
});
=======
Route::get('/', 'ViewController@main');
Route::get('/login', 'ViewController@login');
Route::get('/whats-new', 'ViewController@whatsNew');
Route::get('/formacion-asistencia', 'ViewController@formacionAsistencia');
Route::get('/introduccion-photoshop', 'ViewController@index');
Route::get('/tutorial-detalles', 'ViewController@tutorialDetalle');
Route::get('/prueba-gratuita', 'ViewController@pruebaGratuita');
Route::get('/download','ViewController@download');
Route::get('/tutoriales','ViewController@tutoriales');
>>>>>>> 78b22b69b53aa4dd895049d59d4aceb7c4d5fa32
