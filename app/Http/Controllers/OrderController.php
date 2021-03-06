<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orderDetail;
use App\Models\dinner_menu;
use App\Http\Controllers;

class OrderController extends Controller
{
    public function show(Request $request)
    {
        $menu = DB::table('menu_items')->orderBy('id','ASC')->get();
        $menu1 = App\Models\dinner_menu::orderBy('id','ASC')->where('category','HnS')->get();
        $menu2 = App\Models\dinner_menu::orderBy('id','ASC')->where('category','S')->get();
        $menu3 = App\Models\dinner_menu::orderBy('id','ASC')->where('category','B')->get();
        $menu4 = App\Models\dinner_menu::orderBy('id','ASC')->where('category','PK')->get();
        $menu5 = App\Models\dinner_menu::orderBy('id','ASC')->where('category','MCS')->get();
        $menu6 = App\Models\dinner_menu::orderBy('id','ASC')->where('category','PO')->get();
        return view('layouts.placeOrder ', ['menu' => $menu, 'menu1' => $menu1, 'menu1' => $menu2 , 'menu1' => $menu3 , 'menu1' => $menu4 , 'menu1' => $menu5 , 'menu1' => $menu6]);
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
            // $order_id = $request->input('order_id');
            // $menu_item = $request->input('menu_item',[]);
            // $quantity = $request->input('quantity',[]);

            // $orders = [];


            // foreach($order_id as $index => $order)
            // {
            //     $orders[]=
            //     [
            //         "order_id" => $order_id[$index],
            //         "menu_item" => $menu_item[$index],
            //         "quantity" => $quantity[$index],
            //     ];
            // }
            // $created = orderDetail::insert($orders);



            orderDetail::create([
                'order_id'=> $request->count,
                'menu_item'=> $request['menu_item'],
                'quantity'=> $request['quantity'],
            ]);

            return redirect()->route('placeOrder')->with('success',true)->with('message','You have placed an order!');
        }
    }
}
