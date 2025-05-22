<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', [CustomerController::class, 'index']) -> name('home');

Route::get('/register', [CustomerController::class, 'register']) -> name('register');

Route::get('/login', [CustomerController::class, 'login']) -> name('login');

Route::get('/profile', [CustomerController::class, 'profile']) -> name('profile');

Route::get('/article1', [CustomerController::class, 'article1']) -> name('article1');

Route::get('/article2', [CustomerController::class, 'article2']) -> name('article2');


Route::post('/register', [CustomerController::class, 'store']) -> name('store');

Route::post('/login', [CustomerController::class, 'userlogin']) -> name('userlogin');

Route::post('/profile', [CustomerController::class, 'userlogout']) -> name('userlogout');

