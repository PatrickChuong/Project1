<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function addOrder(Request $request)
    {
        return response()->json([$request->all()]);
    }
}
