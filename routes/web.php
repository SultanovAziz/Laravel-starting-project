<?php

use Illuminate\Support\Facades\Route;


Route::get('/','HomeController@index')->name('home');
Route::get('/create','HomeController@create')->name('postt.create');
Route::post('/','HomeController@store')->name('postt.store');

Route::get('page/about','PageController@show')->name('page.about');


