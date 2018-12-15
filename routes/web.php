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

//Route::get('/courses', 'CourseController@index')->name('courses.index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => '/api'], function () {
    Route::get('/courses', 'Api\CourseController@index');
    Route::get('/courses/filters', 'Api\CourseController@filters');
});

Route::get('/courses', function () {
    return view('courses.index');
});