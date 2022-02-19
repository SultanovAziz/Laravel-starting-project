<?php

use Illuminate\Support\Facades\Route;


Route::get('/','HomeController@index')->name('home');
Route::get('/create','HomeController@create')->name('post.create');
Route::post('/','HomeController@store')->name('post.store');

Route::get('page/about','PageController@show')->name('page.about');

Route::resource('posts','PostsController',['parameters' => [
    'posts' => 'slug',
]]);


