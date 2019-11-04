<?php

Route::get('/', 'ViewController@main');
Route::get('/login', 'ViewController@login');
Route::get('/whats-new', 'ViewController@whatsNew');
Route::get('/formacion-asistencia', 'ViewController@formacionAsistencia');
Route::get('/introduccion-photoshop', 'ViewController@index');
Route::get('/tutorial', 'ViewController@tutorial');
Route::get('/prueba-gratuita', 'ViewController@pruebaGratuita');
