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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/vehicle-manager', 'HomeController@manager');
Route::get('/pricing', 'HomeController@pricing');
Route::get('/support', 'HomeController@support');
Route::get('/setting', 'HomeController@setting');

Route::get('/add-vehicle', 'HomeController@addVehicle');
