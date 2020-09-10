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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/personas', 'PersonController@index');
Route::post('/personas', 'PersonController@store')->name('persons.store');
Route::get('/personas/edit/{id}', 'PersonController@editView')->name('persons.editview');
Route::post('personas/{id}', 'PersonController@edit')->name('persons.edit');
Route::delete('/personas/{id}', 'PersonController@destroy')->name('persons.destroy');
