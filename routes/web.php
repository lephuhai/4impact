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
    return view('layouts.auth.backend');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {

    Route::get('dashboard', 'DashboardController@index')->name('dashboard.index');

    Route::group(['prefix' => 'github'], function () {

        Route::any('search', 'GitHubController@search')->name('github.search');

    });

    Route::group(['prefix' => 'zk'], function () {

        Route::get('fight', 'ZKSoftware@fight')->name('zk.fight');
        Route::get('attendance', 'ZKSoftware@attendance')->name('zk.attendance');
    });
});

Route::get('/home', 'HomeController@index')->name('home');

