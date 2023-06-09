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

Route::get('/session/create','SessionController@create');//Sessioncreate
Route::get('/session/show','SessionController@show'); //Sessionshow
Route::get('/session/delete','SessionController@delete'); //Sessiondelete

Route::get('/pegawai/{Polije}', 'PegawaiController@index'); //parameter variable
Route::get('/formulir', 'PegawaiController@formulir');
Route::post('/formulir/proses', 'PegawaiController@proses');
Route::get('/cobaerror/{nama?}','CobaController@index');