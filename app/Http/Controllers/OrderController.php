<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view ('layouts.placeOrder')
    }

    public function store(Request @request)
    {
        dd('ok');
    }
}
