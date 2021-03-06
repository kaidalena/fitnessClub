<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

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

Route::get('set-locale/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'ru'])) {
        return redirect()->back();
    }
    Session::put('locale', $locale);

    return redirect()->back();
})->name('locale');

Route::middleware('locale')->group(function() {
    Route::get('/', 'IndexController@index')->name('index');

    Route::middleware('admin')->group(function() {
      Route::get('admin/news-for-table', 'IndexController@dataForTable')->name('admin.news.forTable');
      Route::get('admin/service-for-table', 'ServiceController@dataForTable')->name('admin.service.forTable');
      Route::get('admin/comments-for-table', 'AboutController@dataForTable')->name('admin.comments.forTable');
      Route::get('admin/users-for-table', 'UserController@dataForTable')->name('admin.users.forTable');
      Route::get('admin/shedule-for-table', 'SheduleController@dataForTable')->name('admin.schedule.forTable');
      Route::get('admin/trainings-for-table', 'TrainingsController@dataForTable')->name('admin.trainings.forTable');
      Route::get('admin/training_groups-for-table', 'Training_GroupsController@dataForTable')->name('admin.training_groups.forTable');
      Route::get('admin/cards-for-table', 'CardsController@dataForTable')->name('admin.cards.forTable');
      Route::get('admin/cards_groups-for-table', 'Cards_GroupsController@dataForTable')->name('admin.cards_groups.forTable');
      Route::get('admin/users_cards-for-table', 'UserCardsController@dataForTable')->name('admin.users_cards.forTable');
    });

    Route::get('/exit', 'Controller@exit')->name('exit');

    Route::middleware('check')->group(function() {
        Route::post('/aboutUs-post', 'AboutController@sendRespons')->name('about-respons-post');
        Route::get('/about/getAllComments', 'AboutController@getAllComments');
        Route::post('/cards/buy', 'CardsController@cardsBuyForm')->name('cardsBuy');
        Route::get('/account/edit',  'AccountController@edit')->name('account-edit');
        Route::post('/account/edit-post', 'AccountController@editPost')->name('account-edit-post');
    });

    Route::get('/aboutUs', 'AboutController@allComments')->name('about');

    Route::get('/gallery', 'GalleryController@index')->name('gallery');

    Route::get('/schedule', 'SheduleController@getAllTrainings')->name('schedule');

    Route::get('/contact', 'ContactController@index')->name('contact');

    Route::get('/cards', 'CardsController@allCards')->name('cards');

    Route::post('/cards', 'UserCardsController@buy')->name('cards-buy-post');

    Route::get('/service', 'ServiceController@index')->name('service');

    Route::get('/account', 'AccountController@index')->name('account');

    Route::get('/account/login', 'AccountController@login')->name('auth');

    Route::get('/visits', 'VisitController@index')->name('visits');

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');
});
