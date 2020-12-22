<?php

use GuzzleHttp\Psr7\Request;
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

Route::get('/', 'App\Http\Controllers\PagesController@getHome')->name('home');

Route::get('/contact', 'App\Http\Controllers\PagesController@getContact')->name('contact');

Route::get('/about', 'App\Http\Controllers\PagesController@getAbout')->name('about');

Route::get('contact/messages', 'App\Http\Controllers\ContactController@getMessages')->name('get-messages');

Route::post('/contact/submit', 'App\Http\Controllers\ContactController@submit')->name('contact-form-submit');

