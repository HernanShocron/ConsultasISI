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

Route::get('ejemplo', function () {
    return view('ejemplo');
});
/*
Route::get('inicio', function () {
    return \File::get(public_path() . '/index.html');
});
*/

Route::get('login', function () {
    return view('inicio');    
})->name('inicio');

Route::get('principal', function () {
    return view('principal');
});

Route::get('inscripcion', function () {
    return view('alumnos1');
})->name('alumno');

Route::get('mis-consultas', function () {
    return view('alumnos2');
})->name('alumno-consultas');

Route::get('docentes', function () {
    return view('docentes');
})->name('docente');

Route::get('admin', function () {
    return view('admin');
})->name('admin');