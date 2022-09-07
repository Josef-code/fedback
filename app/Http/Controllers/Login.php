<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    function index(Request $request)
    {
        if ($request->isMethod('post')) {
            $register_user = $request->validate([
                'email' => 'required',
                'password' => 'required',
            ]);
        }

        return view('pages.login');
    }
}
