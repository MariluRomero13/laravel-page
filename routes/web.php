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