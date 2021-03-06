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
    return redirect('/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('user', 'UserController');
Route::get('user/share/{id}/{token}', 'UserController@share')->name('user.share');
Route::resource('course', 'CourseController');
Route::post('course/{course}/adduser', 'CourseController@addUser')->name('course.adduser');