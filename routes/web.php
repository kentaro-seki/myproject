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

});

Route::group([], function() {
    Route::get('app_info/', 'AppInfoController@index')->name('app_info.index');
    Route::post('app_info/', 'AppInfoController@add')->name('app_info.index');


});

Route::group([], function() {
    Route::get('contact/', 'ContactController@index')->name('contact.index');
});