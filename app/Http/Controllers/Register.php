<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class register extends Controller
{
    public function index(Request $request)
    {   
        if ($request->isMethod('post')) {
            dd($request->all());
        }

        return view('pages.register');
    }

    public function register(Request $request)
    {
        dd( $request->all() );
    }

}
