<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function inicio() {
        return view('welcome');
    }

    public function inscribir() {
        return view('alumnos1');
    }

    public function misConsultas() {
        return view('alumnos2');
    }

    public function docentes1() {
        return view('docentes');
    }

    public function docentes2() {
        return view('alumnos1');
    }

    public function admin1() {
        return view('admin');
    }

    public function admin2() {
        return view('alumnos1');
    }

    public function admin3() {
        return view('alumnos1');
    }

    public function admin4() {
        return view('alumnos1');
    }
}
