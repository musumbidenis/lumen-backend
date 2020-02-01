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

