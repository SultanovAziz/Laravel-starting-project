<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hellow',function (){
   return 'Hellow world';
});

Route::get('home',function (){
    $name = 'aziz';
    $age = 2021-2001;
   return view('home',compact('name','age'));
});
//
//Route::get('contact',function (){
//   return view('contact');
//});
//
//Route::post('send-email',function (){
//    if (!empty($_POST)){
//        dump($_POST);
//    }
//   return 'Send email';
//});

//Route::match(['get','post'],'contact',function (){
//    if (!empty($_POST)){
//        dump($_POST);
//    }
//    return view('contact');
//});

Route::match(['get','post'],'contact2',function (){
   if (!empty($_POST)){
       dump($_POST);
   }
   return view('contact');
})->name('contact');

Route::view('about','about',['name' => 'Aziz']);

//Route::redirect('about','contact2');

Route::permanentRedirect('about','contact2');
//
//Route::get('post/{id}/{slug}',function ($id,$slug){
//    return "My id = $id | slug = $slug";
//})->where(['id' => '[0-9]','slug' => '[A-Za-z0-9-]+']);

Route::get('posts/{id}/{slug?}',function ($id,$slug = null){
    return "My id = $id | slug = $slug";
})->name('posts');

Route::prefix('admin')->name('admin.')->group(function (){
    Route::get('posts',function (){
       return 'Lists posts';
    });
    Route::get('posts/create',function (){
        return 'Posts create';
    });
    Route::get('posts/{id}/edit',function ($id){
       return "Posts edit $id";
    })->name('posts');
});

Route::fallback(function (){
//   return redirect()->route('contact');
    abort(404,'Ooops page not found ...');
});
