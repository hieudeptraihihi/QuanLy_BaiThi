<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/transcript', 'HomeController@transcript')->name('transcript');
Route::get('/question', 'HomeController@question')->name('question');
Route::get('/usermanager', 'HomeController@usermanager')->name('usermanager');
Route::get('/class', 'HomeController@class')->name('class');


//Class
Route::get('/class', 'ClassManagerController@index');
Route::post('/class/create', 'ClassManagerController@store');
Route::get('/class/{id}/edit', 'ClassManagerController@edit');
Route::post('/class/{id}/edit', 'ClassManagerController@update');
Route::get('/class/{id}/delete', 'ClassManagerController@delete');
