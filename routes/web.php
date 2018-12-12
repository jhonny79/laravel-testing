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
    return view('auth.login');
});

Auth::routes();


Route::get('/', 'dashBoardController@inicio')->name('inicio');
Route::get('/user', 'dashBoardController@user')->name('user');
Route::get('/solicitudes', 'dashBoardController@solicitudes')->name('solicitudes');
Route::get('/generador', 'dashBoardController@generador')->name('generador');


Route::get('/tikect', 'HomeController@index')->name('home');

//TEST-ROUTES 
Route::get('contacto', 'TicketController@test')->name('contacto');
Route::get('test', 'TicketController@test2')->name('test2');