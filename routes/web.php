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
    return view('home');
})->middleware('auth');
Route::get('/profile',function(){
    return view('profile');
})->middleware('auth');
Route::get('/myfile',function(){
    return view('myfile');
})->middleware('auth');
Route::get('/recent',function(){
    return view('recent');
})->middleware('auth');
Route::get('/photos',function (){
    return view('photos')->middleware('auth');
})->middleware('auth');
Route::get('/recycle',function (){
    return view('recycle');
})->middleware('auth');
Route::get('/setting',function (){
    return view('setting');
})->middleware('auth');
Route::get('login',function (){
    return view('auth.login');
})->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


