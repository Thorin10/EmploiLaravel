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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::resource('/', 'WelcomeController');
Route::resource('jobs','JobController');

Auth::routes();
//Route::get('/{$id}', 'WelcomeController@show');
Route::post('newJob', 'JobController@storeNewJob')->name('newJob');
Route::get('companyHome','HomeController@index')->name('companyHome');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');