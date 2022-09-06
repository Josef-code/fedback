<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class register extends Controller
{
    public function index(Request $request)
    {   
        if ($request->isMethod('post')) {
            $register_user = $request->validate([
                'username' => 'required|max:225',
                'email' => 'required',
                'password' => 'required',
            ]);
        }

        return view('pages.register');
    }

    public function register(Request $request)
    {
        dd( $request->all() );
    }

}
