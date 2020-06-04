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

// middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->middleware('auth');
Route::get('/admin/history', 'AdminController@history')->middleware('auth');
Route::get('/admin/view', 'AdminController@view')->middleware('auth');

Route::post('/welcome/submit', 'PaymentsController@submit')->name('pay-form');
