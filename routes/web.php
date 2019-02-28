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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::resource('/cadastrados','PaginasController@cadastrados');
//Route::post('/cadastrados', function(){
     //   return view('cadastrados');
//});
Route::get('/cada','PaginasController@cada');
Route::get('/medico','PaginasController@medico');
Route::get('/usuario','PaginasController@usuario');
Route::get('/cadastro','PaginasController@cadastro');
Route::get('/inicio','PaginasController@index');
Route::get('/main','PaginasController@login');
Route::post('/main/checklogin', 'PaginasController@checklogin');
Route::get('main/suceso','PaginasController@suceso');
Route::get('main/logout','PaginasController@logout');
//Route::resource('home/logout','HomeController@index');




