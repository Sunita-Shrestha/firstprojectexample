<?php

use App\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\Route;
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


// < ------------------Route for customauth------------------------------------>
Route::group(['middleware' => 'guest'], function () {
    Route::get('login', [CustomAuthController::class, 'index'])->name('login');
    Route::post('post-login', [CustomAuthController::class, 'postLogin'])->name('login.post');
    Route::get('registration', [CustomAuthController::class, 'registration'])->name('register');
    Route::post('post-registration', [CustomAuthController::class, 'postRegistration'])->name('register.post');

});
Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
    Route::get('logout', [CustomAuthController::class, 'logout'])->name('logout');
});
// < ------------------ end Route for customauth------------------------------------>

// Route::get('login', [CustomAuthController::class, 'index'])->name('login');
// Route::post('post-login', [CustomAuthController::class, 'postLogin'])->name('login.post');
// Route::get('registration', [CustomAuthController::class, 'registration'])->name('register');
// Route::post('post-registration', [CustomAuthController::class, 'postRegistration'])->name('register.post');
// Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
// Route::get('logout', [CustomAuthController::class, 'logout'])->name('logout');

// Route::get('/about', function () {
    //     return view('about');
    // });
// // OR
// // Route::view("about", 'about');
// Route::get('/contact', function () {
    //     return view('contact');
    // });

    // Route::get("user/{user}", [usercontroller::class, 'index']);

    // Route::view("users", 'users');
    // Route::get("user1", [User1Controller::class, 'index']);





    // Route::middleware([
        //     'auth:sanctum',
        //     config('jetstream.auth_session'),
        //     'verified'
        // ])->group(function () {
            //     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });






// Auth::routes();


// Route::post('forms', [FormController::class, 'getData']);
// To show the view page
// Route::view("forms", 'forms');
// Route::view("contact",'contact')->middleware('protectedPage');
// Route::view("noaccess",'noaccess');

// route the controller (model part)
// Route::get('users', [UsersController::class], 'getData1');

// Route::resource('posts', PostController::class);
Route::get('/create', [PostController::class, 'create'])->name('posts.create');
//route for post
route::post('store', [PostController::class,'store'])->name('posts.store');
route::get('posts', [PostController::class,'show'])->name('posts.show');
route::get('delete/{post}', [PostController::class,'destroy']);
// ->name('posts.delete');
route::get('edit/{post}', [PostController::class,'edit']) ->name('posts.edit');
route::get('update/{post}', [PostController::class, 'update'])->name('posts.update');
