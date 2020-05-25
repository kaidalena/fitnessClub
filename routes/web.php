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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/aboutUs', 'AboutController@allComments')->name('about');

Route::post('/aboutUs', 'AboutController@sendRespons')->name('about-respons-post');

Route::get('/gallery', 'GalleryController@index')->name('gallery');

Route::get('/schedule', 'SheduleController@getAllTrainings')->name('schedule');

Route::get('/contact', 'ContactController@index')->name('contact');

Route::get('/cards', 'CardsController@allCards')->name('cards');

Route::post('/cards/buy', 'CardsController@cardsBuyForm')->name('cardsBuy');

// Route::post('/cards/buy', 'CardsController@load')->name('cards-buy-post');

Route::get('/service', 'ServiceController@index')->name('service');

Route::get('/account', 'AccountController@index')->name('account');

Route::get('/account/login', 'AccountController@login')->name('account-login');

Route::post('/account/login', 'AccountController@enter')->name('account-login-enter');

Route::post('/account/login', 'AccountController@registration')->name('account-login-registration');

Route::get('/account/edit',  'AccountController@edit')->name('account-edit');

Route::post('/account/edit', 'AccountController@editPost')->name('account-edit-post');

