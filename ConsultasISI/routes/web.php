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

Auth::routes();

Route::get('/', 'PagesController@inicio')->name('inicio');

/*
Route::get('/', 'PagesController@alumnoIndex')->name('alumnoHome');
*/


Route::get('inscripcion', 'PagesController@inscribir')->name('alumnoInscribir');

Route::get('mis-consultas', 'PagesController@misConsultas')->name('alumnoConsultas');

Route::get('docentes', 'PagesController@docentes1')->name('docenteHome');

Route::get('/admin', 'PagesController@admin1')->name('adminHome');

Route::get('ABMC', 'PagesController@adminABMC')->name('adminABMC');

Route::get('listado', 'PagesController@adminListado')->name('adminListado');



Route::get('/home', 'HomeController@index')->name('home');


Route::get('principal', function () {
    return view('principal');
});





