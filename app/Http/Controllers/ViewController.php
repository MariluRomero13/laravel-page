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
}
