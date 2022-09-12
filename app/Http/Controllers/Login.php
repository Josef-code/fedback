<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    function index(Request $request)
    {
        if ($request->isMethod('post')) {

            $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:5',
            ]);
            
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                return redirect(route('dashboard'));
            }
        }


        return view('pages.login');
    }

    // function login(Request $request)
    // {
    //     dd($request->all());
    // }
}
