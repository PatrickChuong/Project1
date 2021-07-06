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

}
