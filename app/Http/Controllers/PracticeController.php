<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function addOrder(Request $request)
    {

        //add = orderDetail::create($request->all());
    
        // return response()->json($add);



        dd($request->order);
    }
}
