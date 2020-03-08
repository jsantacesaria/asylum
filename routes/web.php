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

/*
Route::get('/', function () {
    return view('welcome');
});
 
Route::get('/generic', function () {
    return view('generic');
});

Route::get('/contact', function () {
    return view('contact');
});
*/

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/thanks', 'ContactsController@thanks');
Route::get('/contact', 'ContactsController@create');
Route::post('/contact', 'ContactsController@store');
Route::get('/login', 'PagesController@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
