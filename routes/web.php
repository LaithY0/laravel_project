<?php

use App\Http\Controllers\TripsController;
use App\Http\Controllers\UsersController;

use App\Models\users;
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


Route::get('/tours', function () {
    return view('tours');
});






Route::get('/enjoyment',[TripsController::class, 'enjoyment']);
Route::get('/medical',[TripsController::class, 'medical']);
Route::get('/archaeological',[TripsController::class, 'archaeological']);
Route::get('/religious',[TripsController::class, 'religious']);
Route::get('/petradetails',[TripsController::class, 'petradetails']);
Route::get('/deaddetails',[TripsController::class, 'deaddetails']);
Route::get('/ummdetails',[TripsController::class, 'ummdetails']);
Route::get('/ammandetails',[TripsController::class, 'ammandetails']);
Route::get('/aqabadetails',[TripsController::class, 'aqabadetails']);
Route::get('/wadidetails',[TripsController::class, 'wadidetails']);
Route::get('/user',[UsersController::class, 'user']);
Route::get('/edit',[UsersController::class, 'edit']);
Route::post('/update/{id}',[UsersController::class, 'update']);








