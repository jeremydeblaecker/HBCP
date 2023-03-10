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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function() {
    return view('accueil');
})->name('home');

Route::get('/login', function () {
    return view('auth/login');
})->name('login');

Route::get('/register', function () {
    return view('auth/register');
})->name('register');

Route::get('/actuality', function () {
    return view('actualite');
})->name('actuality');

Route::get('/club', function () {
    return view('club');
})->name('club');

Route::get('/shop', function () {
    return view('accueil');
})->name('shop');

Route::get('/mobileApp', function () {
    return view('application');
})->name('mobileApp');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
