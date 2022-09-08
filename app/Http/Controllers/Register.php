<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

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

            $user = User::create($register_user);
            return redirect('/');
        }

        return view('pages.register');
    }

    public function register(Request $request)
    {
        //

    }

}
