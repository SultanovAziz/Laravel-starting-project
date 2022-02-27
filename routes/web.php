<?php

use Illuminate\Support\Facades\Route;


Route::get('/','HomeController@index')->name('home');
Route::get('/create','HomeController@create')->name('postt.create');
Route::post('/','HomeController@store')->name('postt.store');

Route::get('page/about','PageController@show')->name('page.about');

//Route::get('/send','ContactController@send');
Route::match(['get','post'],'/send','ContactController@send')->name('send');


Route::get('/register','UserController@create')->name('register.create');
Route::post('/register','UserController@store')->name('register.store');
