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


Route::middleware(['guest'])->group(function () {
    Route::get('/register', 'UserController@create')->name('register.create');
    Route::post('/register', 'UserController@store')->name('register.store');
    Route::get('/login', 'UserController@loginForm')->name('login.create');
    Route::post('/login', 'UserController@login')->name('login');

});


Route::middleware(['admin'])->group(function () {
    Route::get('/admin','Admin\MainController@index');
});

Route::get('/', 'HomeController@index')->name('home');
Route::post('/', 'HomeController@store')->name('post.store');
Route::get('/create', 'HomeController@create')->name('post.create');

Route::get('/page/about', 'PageController@show')->name('page.about');    
Route::resource('posts','PostController');
Route::match(['get','post'], '/send', 'ContactController@send');


Route::get('/logout', 'UserController@logout')->name('logout')->middleware('auth');



Route::fallback(function(){
    // abort(404, 'Oops...');
    return redirect()->route('home');
});





