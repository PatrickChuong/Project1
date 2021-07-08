<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TotalController extends Controller
{

    public function index()
    {
        
        return view('layouts.totalOrder');

    }
    public function total(Request $request)
    {
        $total_id = $request -> total;
        $query = DB::table('order_details')
                //->join('menu_items', 'order_details.item_id', '=','menu_items.id')
                //->select('order_details.id','order_details.order_id','menu_items.price * order_details.quantity as total')
                //->from('order_details')
                //->groupBy('order_details.order_id')

                ->join('menu_items','order_details.item_id','=','menu_items.id')
                ->select('order_details.order_id','menu_items.price' , 'order_details.quantity')
                
                ->groupBy('order_details.order_id','menu_items.price','order_details.quantity')
                
                ->get();

        echo $query;
    }
}
