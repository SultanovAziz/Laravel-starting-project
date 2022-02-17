<?php

use Illuminate\Support\Facades\Route;


Route::get('/','HomeController@index')->name('home');
Route::get('page/about','PageController@show')->name('page.about');
Route::resource('posts','PostsController',['parameters' => [
    'posts' => 'slug',
]]);


