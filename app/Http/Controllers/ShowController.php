<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orderDetail;
use App\Http\Controllers;

class ShowController extends Controller
{

    public function index()
    {
        
        return view('layouts.showOrder');

    }

    public function delete(Request $request)
    {

        //dd($request->delete);

        $this->validate($request, [
            'delete'=>'required',
        ]);


        $delete_id = $request->delete;
        $del = orderDetail::where('order_id','=', $delete_id)->first();
        if ($del === null)
        {
            //dd($del);
            return redirect()->route('deleteOrder')->with('success',true)->with('message','Order ID does not Exist');
        }
        else
        {
            $del->delete();
            return redirect()->route('deleteOrder')->with('success',true)->with('message','You have deleted an Order ID');
        }
            


    }

    public function total(Request $request)
    {
        $total_id = $request -> total;
        $query = DB::table('order_details')
                    ->join('menu_items', 'order_details.item_id','=','menu_items.id')
                    ->select('order_details.id','total as (menu_items.price*order_details.quantity)')
                    ->where('order_id','=','$total_id')
    }
}
