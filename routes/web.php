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

# App Languaje
App::setLocale('es');

# Home
Route::view('/', 'home')->name('home');

# About
Route::view('about', 'about')->name('about');

# Projects
Route::resource('projects', 'ProjectController');

// Route::get('project', 'ProjectController@index')->name('projects.index');
// Route::get('project/create', 'ProjectController@create')->name('projects.create');
// Route::get('project/{project}', 'ProjectController@show')->name('projects.show');
// Route::get('project/{project}/edit', 'ProjectController@edit')->name('projects.edit');
// Route::patch('project/{project}', 'ProjectController@update')->name('projects.update');
// Route::post('project', 'ProjectController@store')->name('projects.store');
// Route::delete('project/{project}', 'ProjectController@destroy')->name('projects.destroy');

# Contact
Route::view('contact', 'contact')->name('contact');
Route::post('contact', 'MessageController@store')->name('message.store');