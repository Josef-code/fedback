<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\Auth;

class dashboard extends Controller
{
    function index()
    {
        if (Auth::check()) {
            return view('pages.dashboard');
        }

        return redirect("login");
    }

    function logout()
    {
        Session::flush();
        Auth::logout();

        return view('pages.login');
    }
}
