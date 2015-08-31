<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::controller('/users', 'UsersController');
Route::controller('/dashboard', 'DashboardController');

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

Route::get('/r/{url}', function($url) {
  $user = \User::where('link', $url)->firstOrFail();
  return View::make('view')->with('user', $user);
});
