<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\usercontroller;
use App\Http\Controllers\User1Controller;
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

Route::get('/user', function () {
    return view('user');
});
Route::get('/about', function () {
    return view('about');
});
// OR
// Route::view("about", 'about');
Route::get('/contact', function () {
    return view('contact');
});

// Route::get("user/{user}", [usercontroller::class, 'index']);

Route::view("users", 'users');
Route::get("user1", [User1Controller::class, 'index']);




