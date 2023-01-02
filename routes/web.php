<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\usercontroller;
use App\Http\Controllers\User1Controller;
use App\Http\Controllers\FormController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostController;

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

Route::get("user/{user}", [usercontroller::class, 'index']);

Route::view("users", 'users');
Route::get("user1", [User1Controller::class, 'index']);





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('forms', [FormController::class, 'getData']);
// To show the view page 
Route::view("forms", 'forms');
Route::view("contact",'contact')->middleware('protectedPage');
Route::view("noaccess",'noaccess');

// route the controller (model part)
// Route::get('users', [UsersController::class], 'getData1');

// Route::resource('posts', PostController::class);
Route::get('/posts', function () {
    return view('insert');
});
//route for post 
route::post('store', [PostController::class,'store'])->name('store');
route::get('show', [PostController::class,'show']);
route::get('delete/{id}', [PostController::class,'destroy']);
route::get('edit/{id}', [PostController::class,'edit']);
route::get('update/{id}', [PostController::class, 'update']);