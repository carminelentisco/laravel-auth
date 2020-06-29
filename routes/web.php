<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
// HomePage  { Rotta visibile a tutti }
Route::get('/', 'HomePageController@index' )->name('home');

Auth::routes();

// GUEST { Rotta per utenti non registrati }
Route::get('/posts', 'PostController@index')->name('posts.index');

// ADMIN { Rotta per utenti registrati }
Route::prefix('admin')->name('admin.')->namespace('Admin')->middleware('auth')->group(function () {

    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/posts','PostController');
        
});


