<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function inicio() {
        return view('welcome');
    }
/*
    public function alumnoIndex() {
        return view('Alumno.home');
    }
*/
    public function inscribir() {
        return view('Alumno.alumnos1');
    }

    public function misConsultas() {
        return view('Alumno.alumnos2');
    }

    public function docentes1() {
        return view('Docente.docentes1');
    }

    public function docentes2() {
        return view('alumnos1');
    }

    public function admin1() {
        return view('Administrador.admin1');
    }

    public function adminABMC() {
        return view('Administrador.abmc');
    }

    public function adminListado() {
        return view('Administrador.listado');
    }

    public function admin4() {
        return view('alumnos1');
    }
}
