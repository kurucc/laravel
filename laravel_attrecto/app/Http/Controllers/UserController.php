<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function loginCheck()
    {
        if(Auth::check())
        {
                $user = Auth::user()->name;
                return view('/soreim', ['name' => $user]);
        }
        else
        {
                return view('/soreim');
        }
    }
    function logOut()
    {
        Auth::logout();
        return redirect('/');
    }
}
