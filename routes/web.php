<?php

// use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Basic routing
use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return '2241720174 Wulan Maulidya P. F';
});

// Route parameters
Route::get('/user/{WulanMaulidya}', function ($name) {
    return 'Nama saya ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});

// Optional parameters
Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama saya ' . $name;
});

// route name
Route::get('/user/profile', function () {
    //
})->name('profile');

// Contoh penggunaan route group
// Route::middleware(['first', 'second'])->group(function () { 
//     Route::get('/', function () {
//         // Uses first & second middleware...
//     });
    
//     Route::get('/user/profile', function () {
//         // Uses first & second middleware...
//     });
// });    
// Route::domain('{account}.example.com')->group(function () { 
//     Route::get('user/{id}', function ($account, $id) {
//         //
//     });
// });
// Route::middleware('auth')->group(function () { 
//     Route::get('/user', [UserController::class, 'index']); 
//     Route::get('/post', [PostController::class, 'index']); 
//     Route::get('/event', [EventController::class, 'index']);
// });

// Contoh penggunaan route prefixes
// Route::prefix('admin')->group(function () { 
//     Route::get('/user', [UserController::class, 'index']); 
//     Route::get('/post', [PostController::class, 'index']); 
//     Route::get('/event', [EventController::class, 'index']);

// });

// Contoh penggunaan redirect routes
// Route::redirect('/here', '/there');

// Contoh penggunaan view routes
// Route::view('/welcome', 'welcome'); 
// Route::view('/welcome', 'welcome', ['name' => 'Taylor']);
