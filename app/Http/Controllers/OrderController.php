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

        //dd($index);
        //dd($request->item_id);
        if ($request->quantity <1)
        {
            return redirect()->route('placeOrder')->with('success',true)->with('message','Quantity must be a positive number');
        }
        else
        {
            $order_id = $request->input('order_id');
            $menu_item = $request->input('menu_item',[]);
            $quantity = $request->input('quantity',[]);

            $orders = [];


            foreach($order_id as $index => $order)
            {
                $orders[]=
                [
                    "order_id" => $order_id[$index],
                    "menu_item" => $menu_item[$index],
                    "quantity" => $quantity[$index],
                ];
            }
            $created = orderDetail::insert($orders);



            // orderDetail::create([
            //     'order_id'=> $request->count,
            //     'menu_item'=> $request['menu_item'],
            //     'quantity'=> $request['quantity'],
            // ]);

            return redirect()->route('placeOrder')->with('success',true)->with('message','You have placed an order!');
        }
    }
}
