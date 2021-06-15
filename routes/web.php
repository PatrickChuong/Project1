<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;



Route::get('/menu', function () {
    return view('layouts.menu');
});

Route::get('/contact', function () {
    return view('layouts.contact');
});

Route::get('/photo', function () {
    return view('layouts.photo');
});

Route::get('/home', function () {
    return view('layouts.prac');
});

Route::get('/', function () {
    return view('post.index');
});

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
