<?php

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

    if (Auth::check()) {
        return response('Fuck you!!', 403);
    }

    return view('auth.login');
});

//https://github.com/laravel/framework/blob/5.3/src/Illuminate/Routing/Router.php
Auth::routes();

// throttle Rate-limit: Nếu vượt quá 60 request trong 1 phút thì IP sẽ bị block 5 phút.
Route::group(['middleware' => ['auth', 'throttle:60,5']], function () {

    Route::get('dashboard', 'DashboardController@index')->name('dashboard.index');

    Route::group(['prefix' => 'manage'], function() {

        Route::any('revenue', 'DashboardController@manage_revenue')->name('manage.revenue');
    });

    Route::group(['prefix' => 'account'], function() {

        Route::any('', 'ProfileController@account')->name('profile.account');
        Route::any('password', 'ProfileController@password')->name('profile.password');
        Route::any('social_profiles', 'ProfileController@social_profiles')->name('profile.social_profiles');
        Route::any('notifications', 'ProfileController@notifications')->name('profile.notifications');
        Route::any('sessions', 'ProfileController@sessions')->name('profile.sessions');
    });

    Route::group(['prefix' => 'github'], function () {

        Route::any('search', 'GitHubController@search')->name('github.search');

    });


});

Route::group(['prefix' => 'zk'], function () {

	Route::get('users', 'ZKSoftware@users')->name('zk.users');
	Route::get('users/{PIN}', 'ZKSoftware@user')->name('zk.user');

	Route::get('user/templates', 'ZKSoftware@finger_templates')->name('zk.templates');
	Route::get('user/templates/{PIN}', 'ZKSoftware@finger_template')->name('zk.template');
	Route::put('user/templates/{PIN}', 'ZKSoftware@finger_template');

	Route::get('user/attendances', 'ZKSoftware@get_att_logs')->name('zk.attendances');
	Route::get('user/attendances/{PIN}', 'ZKSoftware@get_att_log')->name('zk.attendance');

	Route::get('algorithm', 'ZKSoftware@get_fingerprint_algorithm')->name('zk.algorithm');
	Route::get('storage', 'ZKSoftware@get_free_size')->name('zk.storage');

	Route::get('restart', 'ZKSoftware@restart');

	Route::get('get_date', 'ZKSoftware@get_date');
	Route::post('set_date/{date}/{time}', 'ZKSoftware@set_date');

	Route::get('fight', 'ZKSoftware@fight')->name('zk.fight');
	Route::get('attendance', 'ZKSoftware@attendance')->name('zk.attendance');
});

Route::get('/home', 'HomeController@index')->name('home');

