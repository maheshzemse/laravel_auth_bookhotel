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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('list', 'HotelController@form');

Route::get('list', 'HotelController@list');

Route::view('gallary','gallary');
Route::view('mumbai','mumbai');
Route::view('goa','goa');
Route::view('bangalore','bangalore');
Route::view('rajasthan','rajasthan');
Route::view('aboutus','aboutus');
Route::view('contact','contact');




