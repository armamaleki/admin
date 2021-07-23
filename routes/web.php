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
Route::prefix('admin')->namespace('Admin')->group(function(){
    Route::resource('','AdminController')->middleware('auth');
    Route::resource('profile','ProfileController')->middleware('auth');
    Route::resource('post','PostController')->middleware('auth');
    Route::resource('caffe','CaffeController')->middleware('auth');
    Route::resource('menu','MenuController')->middleware('auth');
    Route::resource('game','GameController')->middleware('auth');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
