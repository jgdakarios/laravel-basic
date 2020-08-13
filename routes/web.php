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

App::setLocale('es');

Route::view('/', 'home')->name('home');
Route::view('about', 'about')->name('about');

Route::get('project', 'ProjectController@index')->name('projects.index');
Route::get('project/{id}', 'ProjectController@show')->name('projects.show');

Route::view('contact', 'contact')->name('contact');

Route::post('contact', 'MessageController@store')->name('message.store');