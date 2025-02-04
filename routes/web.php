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


// Route::get('/', 'PostController@index'); //一覧画面
Route::get('/', function() {
    return view('posts/index');
});

Route::get('/posts/london', 'OpenWeatherController@londonData');
Route::get('/posts/namibu', 'OpenWeatherController@namibuData');
Route::get('/posts/makko', 'OpenWeatherController@makkoData');

Route::get('result', 'ResultController@currentLocation')->name('result.currentLocation');
Route::get('show', 'OpenWeatherController@weatherData')->name('show.show');