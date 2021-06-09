<?php

use Illuminate\Support\Facades\Route;


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
