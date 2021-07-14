<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orderDetail;
use App\Http\Controllers;

class OrderController extends Controller
{
    public function show(Request $request)
    {
        $menu = DB::table('menu_items')->orderBy('id','ASC')->get();
        return view('layouts.placeOrder ', ['menu' => $menu]);
    }

    public function index()
    {
        return view ('layouts.placeOrder');
    }

    public function store(Request $request)
    {

        //dd($request->item_id);
        if ($request->quantity <1)
        {
            return redirect()->route('placeOrder')->with('success',true)->with('message','Quantity must be a positive number');
        }
        else
        {
            orderDetail::create([
                'order_id'=> $request->count,
                'menu_item'=> $request[$index]['menu_item'],
                'quantity'=> $request[$index]['quantity'],
            ]);

            return redirect()->route('placeOrder')->with('success',true)->with('message','You have placed an order!');
        }
    }
}
