<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('admin/news/create', 'IndexController@create')->name('admin.news.create');
Route::post('admin/news/change', 'IndexController@change')->name('admin.news.change');
Route::post('admin/news/delete', 'IndexController@delete')->name('admin.news.delete');

Route::post('admin/service/create', 'ServiceController@create')->name('admin.service.create');
Route::post('admin/service/change', 'ServiceController@change')->name('admin.service.change');
Route::post('admin/service/delete', 'ServiceController@delete')->name('admin.service.delete');

Route::post('admin/about/create', 'AboutController@create')->name('admin.about.create');
Route::post('admin/about/change', 'AboutController@change')->name('admin.about.change');
Route::post('admin/about/delete', 'AboutController@delete')->name('admin.about.delete');
