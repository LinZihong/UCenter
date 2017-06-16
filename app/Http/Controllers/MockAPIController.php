<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Crypt;

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

    function cookieBack(Request $request)
    {

//        return response($request->cookie('token'))
//            ->header('Access-Control-Allow-Origin','http://localhost:8000')
//            ->header('Access-Control-Allow-Credentials','true');
        return response('see it')
            ->header('Access-Control-Allow-Origin','http://localhost:8000')
            ->header('Access-Control-Allow-Credentials','true')
//            ->header('Set-Cookie', $request->cookie('token'));
            ->cookie('token', $request->cookie('token'),60);
//        return redirect()->back()
//            ->header('Access-Control-Allow-Origin','http://localhost:8000')
//            ->header('Access-Control-Allow-Credentials','true');

    }
}
