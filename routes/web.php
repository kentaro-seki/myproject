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

    Route::get('/', 'AppToppageController@index')->name('app_toppage.index');

Route::group(['prefix' => 'admin'], function() {
    Route::get('contact/', 'Admin\ContactController@index');
});

Route::group([], function() {
    Route::get('app_manage/', 'AppManageController@index')->name('app_manage.index');

});

Route::group([], function() {
    Route::get('app_addition/', 'AppAdditionController@index')->name('app_addition.index');
    Route::post('app_addition/', 'AppAdditionController@create')->name('app_addition.create');
// routeにcreateを追加する。
});

Route::group([], function() {
    Route::get('contact/', 'ContactController@index')->name('contact.index');
    Route::post('contact/', 'ContactController@add')->name('contact.index');

});
