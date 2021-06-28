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

            orderDetail::create([
                'order_id'=> '1',
                'item_id'=> $request->item_id,
                'quantity'=> $request->quantity,
            ]);

        return redirect()->route('placeOrder');
    }
}
