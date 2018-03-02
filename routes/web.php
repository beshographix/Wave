<?php

Route::get('/' , 'MainController@index')->name('home');

Route::resource('/devices', 'DeviceController');

Route::resource('/lectures', 'LectureController');

Route::resource('/broadcasts', 'BroadcastController');

Route::get('/lobby', 'MainController@lobby')->name('lobby');
Route::get('/settings', 'MainController@settings')->name('settings');

Route::get('/announcements/create/{lecture}', 'AnnouncementController@create')->name('announcements.create.lecture');
Route::resource('/announcements', 'AnnouncementController');

Route::get('/logout', function(){
    Auth::logout();
    return response()->redirectTo('/');
})->name('logout');



Auth::routes();