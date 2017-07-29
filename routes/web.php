<?php

Auth::routes();

Route::get('', 'PageController@index');
Route::get('fb-venues', 'PageController@fbVenues');

Route::middleware(['auth'])->group(function () {
    Route::get('home', 'PageController@adminHome');
    Route::resource('venues', 'VenueController');
});
