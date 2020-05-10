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
    return view('index');
});

Route::get('/aboutUs', function () {
    return view('aboutUs');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/schedule', function () {
    return view('schedule');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/cards', function () {
    return view('cards');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/account', function () {
    return view('account');
});

// Route::get('/', function () {
//     return view('welcome');
// });
