<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

Route::post('/register', 'AuthController@registerUser');
Route::post('/login', 'AuthController@login');

Route::get('/getCourses', 'CoursesController@getCourses');
Route::get('/getYears', 'YearsController@getYears');

//Sessions for different days of the week
Route::post('/mondaySessions', 'SessionsController@mondaySessions');
Route::post('/tuesdaySessions', 'SessionsController@tuesdaySessions');
Route::post('/wednesdaySessions', 'SessionsController@wednesdaySessions');
Route::post('/thursdaySessions', 'SessionsController@thursdaySessions');
Route::post('/fridaySessions', 'SessionsController@fridaySessions');


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



Route::get('/register', 'AuthController@registrationForm');
Route::post('/register', 'AuthController@registerUser');

Route::get('/admin', 'AuthController@loginForm');
Route::post('/admin', 'AuthController@login');

Route::get('/logout', 'AuthController@logout');


Route::get('/home', 'PagesController@home'); //->middleware('auth');
Route::get('/course', 'PagesController@music'); //->middleware('auth');
Route::get('/image', 'PagesController@image'); //->middleware('auth');
Route::get('/session', 'PagesController@session'); //->middleware('auth');


Route::post('/course/upload', 'CoursesController@store');
Route::post('/unit/upload', 'UnitsController@store');
Route::post('/session/upload', 'SessionsController@store');



//Route::post('/delete_song/{id}', 'SongsController@delete');
