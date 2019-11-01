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

Route::get('/', 'PagesController@inicio')->name('inicio');

Route::get('inscripcion', 'PagesController@inscribir')->name('alumno');

Route::get('mis-consultas', 'PagesController@misConsultas')->name('alumno-consultas');

Route::get('docentes', 'PagesController@docentes1')->name('docente');

Route::get('admin', 'PagesController@admin1')->name('admin');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('principal', function () {
    return view('principal');
});





