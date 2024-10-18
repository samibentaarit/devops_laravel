<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\ExcursionController;

// Route to display the list of excursions
Route::get('/excursions', [ExcursionController::class, 'index']);

// Route to display the form for creating a new excursion
Route::get('/excursions/create', [ExcursionController::class, 'create'])->name('excursions.create');

// Route to handle the POST request for storing a new excursion
Route::post('/excursions', [ExcursionController::class, 'store'])->name('excursions.store');

// Route to show the edit form for an excursion
Route::get('/editExcursion/{excursion}/', [ExcursionController::class, 'edit'])->name('excursions.edit');

// Route to update the excursion after the form is submitted
Route::put('/excursions/{excursion}', [ExcursionController::class, 'update'])->name('excursions.update');

// Route to delete an excursion
Route::delete('/excursions/{excursion}', [ExcursionController::class, 'destroy'])->name('excursions.destroy');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('form');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});


Route::get('/profile', function () {
    return view('admin.profile');
});

Route::get('/table', function () {
    return view('table');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/signup', function () {
    return view('signup');
});


Route::get('/home', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/destination', function () {
    return view('destination');
});

// Route to display the list of excursions
Route::get('/excursionsUser', [ExcursionController::class, 'index2']) ;

Route::get('/addUser', function () {
    return view('addUser');
});
Route::get('/updateUser', function () {
    return view('updateUser');
});
Route::get('/detailUser', function () {
    return view('detailUser');
});




