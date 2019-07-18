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



Route::get('/students', 'studentController@index');
Route::post('/students', 'studentController@store');
Route::get('/students/create', 'studentController@create');
Route::get('/students/{student}', 'studentController@show');
Route::get('/students/{student}/edit', 'studentController@edit');
Route::patch('/students/{student}', 'studentController@update');