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

Route::get('/index', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/features-profile', function () {
    return view('features-profile');
});

Route::get('/qrcode', function () {
    return view('qrcode');
});

Route::get('/info', function () {
    return view('info');
});

Route::get('/logblade', function () {
    return view('logblade');
});