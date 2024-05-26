<?php

use App\Http\Controllers\logincontroller;
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

Route::get('/', [logincontroller::class,'halamanLogin'])->name('Login');
Route::post('/postLogin', [logincontroller::class,'postLogin'])->name('postLogin');

Route::get('/home', function() {
    return view('home');
});
Route::get('/about', function() {
    return view('about');
});
Route::get('/contact', function() {
    return view('contact');
});
Route::get('/register', function() {
    return view('register');
});