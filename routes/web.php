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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'PagesController@index');
Route::resource('/student','StudentsController');
Route::post('/addschool','StudentsController@store');
Route::get('school_pro', 'StudentsController@viewSchool')->middleware('auth');
