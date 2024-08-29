<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('login_view');
    }

    public function verify_otp()
    {
        return view('otp_view');
    }
}
