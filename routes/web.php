<?php

use Illuminate\Support\Facades\Route;


Route::get('/','HomeController@index');
Route::get('page/{slug}','PageController@show');
Route::get('test','Test\TestController@index');
Route::resource('posts','PostsController',['parameters' => [
    'posts' => 'slug',
]]);

Route::fallback(function () {
//    return redirect()->route('home');
    abort(404, 'Oops! Page not found...');
});
