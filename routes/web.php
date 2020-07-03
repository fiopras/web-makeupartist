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


// Route::get('/laravel','PagesController@welcome');




// Auth buat akses ke dalam admin
Route::get('/login', 'AuthsController@login')->name('login');
Route::post('/postlogin', 'AuthsController@postlogin')->name('post-login');
Route::get('/logout', 'AuthsController@logout')->name('logout');


Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/search', 'PagesController@search')->name('search');
Route::get('/service', 'PagesController@service')->name('service');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', 'PagesController@dashboard');


    Route::get('/makeupartist', 'MuartisController@index');
    Route::get('/makeupartist/create', 'MuartisController@create')->name('makeup-create');
    Route::delete('/makeupartist/{muartis}', 'MuartisController@destroy')->name('makeup-destroy');
    Route::post('/makeupartist-create', 'MuartisController@store')->name('makeup-store');
    Route::get('/makeupartist/{muartis}/edit', 'MuartisController@edit')->name('makeup-edit');
    Route::patch('/makeupartist/{muartis}', 'MuartisController@update')->name('makeup-update');
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
