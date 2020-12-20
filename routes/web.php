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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/contact', function (){
	return view('contact');
})->name('about');

Route::get('/about', function (){
	return view('about');
})->name('about');

Route::get('contact/messages', 'App\Http\Controllers\ContactController@getMessages')->name('get-messages');

Route::post('/contact/submit', 'App\Http\Controllers\ContactController@submit')->name('contact-form-submit');

