<?php

use Illuminate\Support\Facades\Route;
use App\Mail\Notification;

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
    Route::get('/admin-list','AdminListController@adminList')->name('admin-list');
    Route::patch('/profile/{user_id}', 'ProfileAccesController@access');
    Route::get('/profile/details/{user_id}','ProfileController@showProfilePageDetails')->name('user_details');
});
