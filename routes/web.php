<?php

Route::get('/', 'HomeController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('/kalender', 'EventController@store')->name('event_create');
Route::put('/kalender', 'EventController@edit')->name('event_edit');
Route::get('/getEvents', 'EventController@show');

