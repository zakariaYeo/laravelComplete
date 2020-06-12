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
// Welcome page
Route::view('/','welcome')->name('welcome');

// Auth route
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Projects
Route::view('/my_projects', 'projects.index')->name('my_projects');
// Our services
Route::view('/our_services','services.index')->name('our_services');
// Confidential politique
Route::view('/privacy_policy','footer.politique')->name('privacy_policy');
// About me
Route::view('/about','footer.about')->name('about');
// Condition
Route::view('/terms_of_use','footer.condition')->name('terms_of_use');
