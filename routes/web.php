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
//MAKE THIS ONE AS THE INDEX
Route::get('/', 'HomeController@login');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/vehicle-manager', 'HomeController@manager');
Route::get('/pricing', 'HomeController@pricing');
Route::get('/support', 'HomeController@support');
Route::get('/setting', 'HomeController@setting');

//ROUTES FOR GETTING DIFFERENTS PRICING PAGES
Route::get('/pricing/trial/add-vehicle', 'HomeController@addvehicletrial');
Route::get('/pricing/std/add-vehicle', 'HomeController@addvehicle');
Route::get('/pricing/premium/add-vehicle', 'HomeController@addvehiclepremium');

//SENDING REQUEST FOR ADDING A VEHICLE
Route::post('/add-trial', 'VehicleController@addtrial');
Route::get('/add-standard', 'VehicleController@addvehicle');
Route::get('/add-premium', 'VehicleController@addvehiclepremium');

Route::get('/newsletter', 'NewsletterController@create');
Route::post('/newsletter','NewsletterController@store');

//REQUESTS FOR OTHERS PAGES
Route::get('/home/transactions', 'OthersController@transactions');
Route::get('/home/notifications', 'OthersController@notifications');
Route::get('/home/history', 'OthersController@history');