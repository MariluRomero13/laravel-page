<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function login()
    {
        return view('page.login');
    }

    public function main()
    {
        return view('page.main');
    }

    public function whatsNew()
    {
        return view('page.whats-new');
    }

    public function formacionAsistencia()
    {
        return view('page.formacion_y_asistencia');
    }

    public function index()
    {
        return view('page.index');
    }

    public function tutorialDetalle()
    {
        return view('page.tutorial_detalles');
    }

    public function pruebaGratuita()
    {
        return view('page.prueba_gratuita');
    }

    public function download()
    {
        return view('page.downloadPhotoshop');
    }

    public function tutoriales()
    {
        return view('page.tutoriales');
    }

    public function helpx()
    {
        return view('page.helpx');
    }
    public function requisitos(){
        return view('page.requisitos');
    }
    public function community(){
        return view('page.community');
    }
}
