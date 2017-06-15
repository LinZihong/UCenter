<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MockAPIController extends Controller
{
    //
    function token(Request $request)
    {
        return redirect()->back()->cookie('token', 'this is a token',60);
//        return 'this is a token';
    }

    function userId(Request $request)
    {
        if($request->cookie('token')!=null)
        {
            return 1;
        }
    }
}
