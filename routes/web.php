<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('home');
// })->name('home');

// Route::get('/about', function () {
//     return view('about');
// });

// Route::match(['post', 'get','put'], '/contact', function () {
//     dump($_POST);
//     return view('contact');

// })->name('contact');

// Route::view('/test', 'test', ['test' => 'test data']);

// Route::get('/post/{id}/{slug?}', function($id, $slug = null){
//     return "Post $id".'<br>'.$slug;
// })->where(['id' => '[0-9]+', 'slug' => '[a-z]+'])->name('post');

// Route::prefix('admin')->group(function () {

//     Route::get('/posts', function () {
//         return 'Posts list';
//     });
//     Route::get('/post/create', function () {
//         return 'Posts create';
//     });
//     Route::get('/post/{id}/edit', function ($id) {
//         return "Edit post $id";
//     });
// });


Route::get('/', 'HomeController@index')->name('home');
Route::get('/page/about', 'PageController@show')->name('page.about');    
Route::resource('posts','PostController');


Route::fallback(function(){
    // abort(404, 'Oops...');
    return redirect()->route('home');
});





