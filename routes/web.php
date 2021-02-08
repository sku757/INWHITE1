<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', 'HomeController@index')->name('home');
Route::get('auth/steam', 'AuthController@redirectToSteam')->name('auth.steam');
Route::get('auth/steam/handle', 'AuthController@handle')->name('auth.steam.handle');
Route::get('auth/logout', 'AuthController@logout')->name('logout');

Route::group([
    'middleware' => 'auth'
], function () {
    Route::get('profile', 'ProfileController@index')->name('profile');
    Route::post('profile/update/data', 'ProfileController@updateData')->name('profile.update.data');
    Route::post('profile/update/info', 'ProfileController@updateInfo')->name('profile.update.info');
    Route::post('search', 'SearchController@search')->name('search');
});