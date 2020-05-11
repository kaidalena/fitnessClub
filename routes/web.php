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
})->name('home');

Route::get('/aboutUs', function () {
    return view('aboutUs');
})->name('about');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/schedule', function () {
    return view('schedule');
})->name('schedule');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/cards', function () {
    return view('cards');
})->name('cards');

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::get('/account', function () {
    return view('account');
})->name('account');

Route::get('/account/edit', function () {
    return view('accountEditForm');
})->name('account-edit');

Route::post('/account/edit', 'AccountController@load')->name('account-edit-post');

