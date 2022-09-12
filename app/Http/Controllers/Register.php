<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;

class register extends Controller
{
    public function index(Request $request)
    {   
        if ($request->isMethod('post')) {
            $register_user = $request->validate([
                'username' => 'required|max:225',
                'email' => 'required|email',
                'password' => 'required',
            ]);

            User::create([
                'username' => $register_user['username'],
                'email' => $register_user['email'],
                'password' => Hash::make($register_user['password']),
            ]);
            
            return redirect(route('login'))->with('success', 'Registeration successful, kindly login');
        }

        return view('pages.register');
    }

    // public function register(Request $request)
    // {
    //     //

    // }

}
