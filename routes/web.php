<?php

use Illuminate\Support\Facades\Route;

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

// Change Port
// php artisan serve --port=8001



Route::get('/', function () {
    return view('admin.dashboard');
});

Route::get('/a', function () {
    return view('admin.Trips');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('signup');
});


Route::get('/book', function () {
    return view('book');
});

Route::get('/details', function () {
    return view('details');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/categories', function () {
    return view('categories');
});