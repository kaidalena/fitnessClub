<?php

use App\Http\Controllers\AboutController;
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

Route::get('/aboutUs', 
// function () {return view('aboutUs');}
    'AboutController@allComments'
)->name('about');

Route::post('/aboutUs', 'AboutController@sendRespons')->name('about-respons-post');

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

Route::get('/cards/buy', function () {
    return view('cardsBuyForm');
})->name('cards-buy');

Route::post('/cards/buy', 'CardsController@load')->name('cards-buy-post');

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::get('/account', function () {
    return view('account');
})->name('account');

Route::get('/account/login', function () {
    return view('accountLoginForm');
})->name('account-login');

Route::post('/account/login', 'AccountController@enter')->name('account-login-enter');

Route::post('/account/login', 'AccountController@registration')->name('account-login-registration');

Route::get('/account/edit', function () {
    return view('accountEditForm');
})->name('account-edit');

Route::post('/account/edit', 'AccountController@edit')->name('account-edit-post');

