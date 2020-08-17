<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['logouted']], function() {
    Route::get('/','LoginController@showLoginForm');
    Route::get('/login','LoginController@showLoginForm');
    Route::post('/login','LoginController@logIn')->name('login');
    Route::get('/register','RegisterController@showSignupForm')->name('register');
    Route::post('/register','RegisterController@signUp');
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/logout','LoginController@logOut')->name('logout');
    Route::get('/profile','ProfileController@showProfilePage')->name('profile');
    Route::post('/profile/details','ProfileController@details')->name('profile/details');
    Route::post('/profile/password','ProfileController@changePassword')->name('profile/password');
    Route::patch('/profile/{user_id}', 'ProfileAccesController@access');
    Route::get('/profile/details/{user_id}','ProfileController@showProfilePageDetails')->name('user_details');
    Route::get('/invite','InvitationController@showInvitationPage')->name('invite');
    Route::post('/invite','InvitationController@sendInvitationMail')->name('invite');
    Route::get('/create','CreateAdminController@showCreateAdminPage')->name('create');
    Route::post('/create','CreateAdminController@store')->name('create');
    Route::delete('/profile/{user_id}/delete','UserController@destroy')->name('delete');
    Route::patch('/profile/{user_id}/block', 'ProfileAccesController@block')->name('block');
    Route::get('/profile/{user_id}/invited', 'ProfileAccesController@invited')->name('invited');
    Route::patch('/profile/{user_id}/admit', 'ProfileAccesController@admit')->name('admit');
    Route::get('/admin/list/super','AdminListController@superAdminList')->name('admin/list/super');
    Route::get('/admin/list/panel','AdminListController@panelAdminList')->name('admin/list/panel');
    Route::get('/admin/list/blocked','AdminListController@blockedAdminList')->name('admin/list/blocked');
    Route::get('/admin/list/accept-decline','AdminListController@acceptDecline')->name('admin/list/accept-decline');
    Route::get('/post','NewsController@showPostNewsPage')->name('post');
    Route::post('/post','NewsController@store')->name('post');
    Route::get('/news','NewsController@showMyNewsPage')->name('news');
    Route::get('/news/{news_id}','NewsController@showNewsDetailsPage');
    Route::get('api/news', 'NewsController@index');
    // Route::post('newsfilter/{filter_id}', 'NewsController@filter');
    Route::post('news/{news/id}/info', 'NewsController@edit');
    Route::get('/news/{news_id}/update','NewsController@showNewsInfoUpdatePage');
    Route::post('/news/update/{news_id}', 'NewsController@updateInfo')->name('news/update/{news_id}');
    Route::get('/news/update/images/{news_id}','NewsController@showNewsImgUpdatePage');
    Route::post('/news/{news_id}/delete/image','NewsController@imageDelete');
    Route::post('/news/update/images/{news_id}', 'NewsController@addImages')->name('addImage');
    Route::get('/news/{news_id}/editors/update','NewsController@showNewsEditorsUpdatePage');
    Route::post('/news/{news_id}/editors/update','NewsController@addEditors');
    Route::post('/news/{news_id}/delete/editor','NewsController@editorDelete');
    // Route::get('/articles/exportCSV','PostsController@exportCSV');
});

Route::get('/{any}', function () {
    return view('main');
})->where('any','.*');
