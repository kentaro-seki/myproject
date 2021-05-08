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

Route::get('/', 'AppToppageController@index');

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
});

Route::group([], function() {
    Route::get('app_manage/', 'AppManageController@index')->name('app_manage.index');

});

Route::group([], function() {
    Route::get('app_addition/', 'AppAdditionController@index')->name('app_addition.index');

});