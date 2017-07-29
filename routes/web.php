<?php

Auth::routes();

Route::get('', 'PageController@index');
Route::get('fb-locations', 'PageController@fbLocations');

Route::middleware(['auth'])->group(function () {
    Route::get('home', 'PageController@adminHome');
    Route::resource('venues', 'VenueController');
});
