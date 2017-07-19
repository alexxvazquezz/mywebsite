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
    $tasks = [
      'Go to the store',
      'Finish my screencast',
      'Clean the house',
      'Feed the dogs'
    ];
    return view('welcome', compact('tasks'));
});


Route::get('/about', function (){
    return view('about');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
