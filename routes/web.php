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


Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('home');
    });

    Route::get('/profile', function () {
        return view('profile');
    });
    Route::get('/myfile', function () {
        return view('myfile');
    });
    Route::get('/recent', function () {
        return view('recent');
    });
    Route::get('/photos', function () {
        return view('photos');
    });
    Route::get('/recycle', function () {
        return view('recycle');
    });
    Route::get('/setting', function () {
        return view('setting');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


