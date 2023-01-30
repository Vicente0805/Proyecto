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

Route::resource('principals', 'PrincipalController');
Route::resource('strategies', 'StrategyController');
Route::resource('activities', 'ActivityController');
Route::get('principals-pdf', 'PrincipalController@exportToPDF')->name ('principals.pdf') ;

//Auth::routes();
 
Route::get('/home', 'HomeController@index')->name('home');
