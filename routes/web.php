<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;


// Auth::routes();

Route::get('/', 'IndexController@index')->name('index');

Route::get('/aboutUs', 'AboutController@allComments')->name('about');

Route::post('/aboutUs', 'AboutController@sendRespons')->name('about-respons-post');

Route::get('/gallery', 'GalleryController@index')->name('gallery');

Route::get('/schedule', 'SheduleController@getAllTrainings')->name('schedule');

Route::get('/contact', 'ContactController@index')->name('contact');

Route::get('/cards', 'CardsController@allCards')->name('cards');

Route::post('/cards/buy', 'CardsController@cardsBuyForm')->name('cardsBuy');

Route::post('/cards', 'UserCardsController@buy')->name('cards-buy-post');

Route::get('/service', 'ServiceController@index')->name('service');

Route::get('/account', 'AccountController@index')->name('account');

Route::get('/account/login', 'AccountController@login')->name('account-login');

Route::post('/account/login', 'AccountController@enter')->name('account-login-enter');

Route::post('/account/login', 'AccountController@registration')->name('account-login-registration');

Route::get('/account/edit',  'AccountController@edit')->name('account-edit');

Route::post('/account/edit', 'AccountController@editPost')->name('account-edit-post');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
