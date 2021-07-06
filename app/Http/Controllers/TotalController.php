<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orderDetail;
use App\Models\MenuItems;

class TotalController extends Controller
{

    public function index()
    {
        
        return view('layouts.totalOrder');

    }
    public function total(Request $request)
    {
        $total_id = $request -> total;
        $query = orderDetail::join('menu_items','order_details.item_id','=','menu_items.id')->select('order_details.order_id','sum(menu_items.Price * order_details.quantity) as total')
        //->where($total_id,'=','order_details.order_id')
        ->get();
        //$query = DB::table('order_details')
        //            ->join('menu_items', 'order_details.item_id','=','menu_items.id')
        //            ->select('order_details.id','total as (menu_items.price*order_details.quantity)')
        //            ->where('order_id','=','$total_id');

        echo $query;
    }
}
