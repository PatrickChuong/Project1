<?php

use Illuminate\Support\Facades\Route;


Route::get('/post', function () {
    return view('post.index');
});
