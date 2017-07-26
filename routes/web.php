<?php

Auth::routes();

Route::get('', 'PageController@index');

Route::middleware(['auth'])->group(function () {
    Route::get('home', 'PageController@adminHome');
    Route::resource('venues', 'VenueController');
});
