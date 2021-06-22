<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orderDetails;
use App\Http\Controllers;

class OrderController extends Controller
{
    public function show(Request $request)
    {
        $select = DB::table('menu_items')->orderBy('id','ASC')->get();
        return view('layouts.placeOrder ', ['select' => $select]);
    }

    public function index()
    {
        return view ('layouts.placeOrder');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'quantity' => 'required',
        ]);

        if(!auth()->attempt($request->only('quantity')))
        {
            return back()->with('status','Invalid login details');
        }

        return redirect()->route('placeOrder');
    }
}
