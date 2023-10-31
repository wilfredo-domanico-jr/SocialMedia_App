<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;
// use App\Http\Controllers\UserPostController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;


// Route::get('/', function () {
//     return view('auth.login');
// })->name('index');




// Route::get('/users/{user:username}/posts', [UserPostController::class, 'index'])->name('users.posts');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/createPost', [HomeController::class, 'createPost'])->name('createPost');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::controller(LoginController::class)->name('login')->group(function(){
    Route::get('/','index')->name('.index');
    Route::post('/login','store')->name('.loggedin');
});

Route::post('/editProfile', [ProfileController::class, 'store'])->name('editProfile');



