<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\TotalController;
use App\Http\Controllers\PracticeController;


// Route::get('/menu', function () {
//     return view('layouts.menu');
// });

Route::get('/menu', function () {
    $menu = App\Models\dinner_menu::orderBy('id','ASC')->where('category','HnS')->get();
    $menu2 = App\Models\dinner_menu::orderBy('id','ASC')->where('category','S')->get();
    $menu3= App\Models\dinner_menu::orderBy('id','ASC')->where('category','B')->get();
    $menu4 = App\Models\dinner_menu::orderBy('id','ASC')->where('category','PK')->get();
    $menu5 = App\Models\dinner_menu::orderBy('id','ASC')->where('category','MCS')->get();
    $menu6 = App\Models\dinner_menu::orderBy('id','ASC')->where('category','PO')->get();
    return View::make('layouts.menu', compact('menu','menu2','menu3','menu4','menu5','menu6'));
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

Route::get('/practice', function () {
    return view('layouts.practice');
});

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

//Route::get('/order', [OrderController::class, 'index'])->name('order');
//Route::post('/order', [OrderController::class, 'store']);

Route::get('/placeOrder', function () {
    $menu = DB::table('menu_items')->orderBy('id','ASC')->get();
    $menu1 = App\Models\dinner_menu::orderBy('id','ASC')->where('category','HnS')->get();
    $menu2 = App\Models\dinner_menu::orderBy('id','ASC')->where('category','S')->get();
    $menu3 = App\Models\dinner_menu::orderBy('id','ASC')->where('category','B')->get();
    $menu4 = App\Models\dinner_menu::orderBy('id','ASC')->where('category','PK')->get();
    $menu5 = App\Models\dinner_menu::orderBy('id','ASC')->where('category','MCS')->get();
    $menu6 = App\Models\dinner_menu::orderBy('id','ASC')->where('category','PO')->get();
    return View::make('layouts.placeOrder ', compact('menu','menu1','menu2', 'menu3', 'menu4', 'menu5', 'menu6'));
});

Route::post('/placeOrder', [OrderController::class, 'store'])->name('placeOrder');

Route::get('/showOrder', [ShowController::class, 'index'])->name('showOrder');

Route::get('/showOrder', function () {
    $menu = App\Models\orderDetail::orderBy('order_id','ASC')->get();
    return View::make('layouts.showOrder ', compact('menu'));
});

Route::post('/showOrder', 'App\Http\Controllers\ShowController@delete')->name('deleteOrder');

Route::get('/totalOrder', [TotalController::class, 'index'])->name('totalOrder');
Route::post('/totalOrder', [TotalController::class, 'total']);

// Route::post('addOrder','PracticeController@addOrder'):
Route::post('/practice', [PracticeController::class, 'addOrder'])->name('addOrder');

//Route::post('formSubmit','PostPracController');

Route::get('/','PostController@index');