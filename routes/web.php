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

Route::get('/', 'BodybuilderController@index' );

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/gym/create', 'GymController@create');

Route::post('/gym', 'GymController@store');

Route::get('/bodybuilder/create', 'BodybuilderController@create');
Route::post('/bodybuilder', 'BodybuilderController@store');
Route::get('/bodybuilder/{bodybuilder}', 'BodybuilderController@show');

Route::patch('/bodybuilder/{bodybuilder}', 'BodybuilderController@subscribe');