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

Route::post('admin/about/create', 'AboutController@create')->name('admin.abouts.create');
Route::post('admin/about/change', 'AboutController@change')->name('admin.abouts.change');
Route::post('admin/about/delete', 'AboutController@delete')->name('admin.abouts.delete');

Route::post('admin/user/create', 'UserController@create')->name('admin.users.create');
Route::post('admin/user/change', 'UserController@change')->name('admin.users.change');
Route::post('admin/user/delete', 'UserController@delete')->name('admin.users.delete');

Route::post('admin/schedule/create', 'ScheduleController@create')->name('admin.schedule.create');
Route::post('admin/schedule/change', 'ScheduleController@change')->name('admin.schedule.change');
Route::post('admin/schedule/delete', 'ScheduleController@delete')->name('admin.schedule.delete');

Route::post('admin/trainings/create', 'TrainingsController@create')->name('admin.trainings.create');
Route::post('admin/trainings/change', 'TrainingsController@change')->name('admin.trainings.change');
Route::post('admin/trainings/delete', 'TrainingsController@delete')->name('admin.trainings.delete');

Route::post('admin/training_groups/create', 'Training_GroupsController@create')->name('admin.training_groups.create');
Route::post('admin/training_groups/change', 'Training_GroupsController@change')->name('admin.training_groups.change');
Route::post('admin/training_groups/delete', 'Training_GroupsController@delete')->name('admin.training_groups.delete');
