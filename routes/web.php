<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('index');

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

// KALENDER //
Route::get('getEvents', 'EventController@index');
Route::post('newEvent', 'EventController@store')->name('event_store');
