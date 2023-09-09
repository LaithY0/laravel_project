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
    return view('admin.Login');
});


Route::get('/AdminUser', function () {
    return view('admin.Users');
});

Route::get('/AdminAccount', function () {
    return view('admin.Account');
});

Route::get('/AdminLogin', function () {
    return view('admin.Login');
});

Route::get('/AdminIndex', function () {
    return view('admin.Index');
});


Route::get('/AdminCategories', function () {
    return view('admin.Categories');
});
Route::get('/AdminTrips', function () {
    return view('admin.Trips');
});
Route::get('/AdminOrders', function () {
    return view('admin.Orders');
});
Route::get('/AdminAdd_users', function () {
    return view('admin.Add_users');
});




