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
        $order_id=orderDetail::find($request->delete)
        $order_id->delete();
    }
}
