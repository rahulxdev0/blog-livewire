<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view("/", "home")->name('homepage');

Route::get("/view/{post_id}", function($post_id){
    return view("singlePost", ['post_id' => $post_id]);
})->name('viewpage');
    

Route::get("/filter", function(){
    return view('filter');
})->name('filter');



Route::prefix("admin")->group(function(){
    Route::get("/", function(){
        return view('admin.dashboard');
    })->name('dashboard');
    Route::get("/topics", function(){
        return view('admin.topics');
    })->name('topics');
    Route::get("/posts", function(){
        return view('admin.manage-post');
    })->name('post');
    Route::get("/posts/create", function(){
        return view("admin.insert-post");
    })->name("create-post");
});

Route::get("/signup", function(){
    return view('register');
})->name('signup');


Route::get('auth/google', [LoginController::class, 'redirectToGoogle']);
Route::get('auth/auth_logout', [LoginController::class, 'auth_logout'])->name('logout');
Route::get('auth/google/callback', [LoginController::class, 'handleGoogleCallback']);
