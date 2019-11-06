<?php

Route::get('/', 'ViewController@main');
Route::get('/login', 'ViewController@login');
Route::get('/whats-new', 'ViewController@whatsNew');
Route::get('/formacion-asistencia', 'ViewController@formacionAsistencia');
Route::get('/introduccion-photoshop', 'ViewController@index');
Route::get('/tutorial-detalles', 'ViewController@tutorialDetalle');
Route::get('/prueba-gratuita', 'ViewController@pruebaGratuita');
Route::get('/download', 'ViewController@download');
Route::get('/tutoriales', 'ViewController@tutoriales');
Route::get('/helpx', 'ViewController@helpx');
Route::get('/requisitos','ViewController@requisitos');